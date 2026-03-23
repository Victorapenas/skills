<?php
// C:\skills\intake_processor.php
header('Content-Type: application/json; charset=utf-8');

// Configurações e Caminhos Base
$baseDir = __DIR__ . DIRECTORY_SEPARATOR . 'projetos';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método não permitido.']);
    exit;
}

try {
    // 1. Obtendo o Slug do Projeto
    $slug = $_POST['projeto_slug'] ?? '';
    if (empty($slug)) {
        throw new Exception("Slug do projeto é obrigatório.");
    }

    $projectDir = $baseDir . DIRECTORY_SEPARATOR . $slug;
    $assetsDir = $projectDir . DIRECTORY_SEPARATOR . 'assets';
    $brandDir = $projectDir . DIRECTORY_SEPARATOR . 'brand';
    $feedbacksDir = $projectDir . DIRECTORY_SEPARATOR . 'feedbacks';

    // 2. Criando Árvore de Diretórios
    $dirs = [$projectDir, $assetsDir, $brandDir, $feedbacksDir];
    foreach ($dirs as $dir) {
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0777, true)) {
                throw new Exception("Falha ao criar diretório: $dir");
            }
        }
    }

    // 3. Função Helper para Uploads
    function handleUploads($fileInputName, $targetDir) {
        $uploadedFiles = [];
        if (isset($_FILES[$fileInputName])) {
            $files = $_FILES[$fileInputName];
            $isMulti = is_array($files['name']);
            
            $count = $isMulti ? count($files['name']) : 1;
            
            for ($i = 0; $i < $count; $i++) {
                $tmpName = $isMulti ? $files['tmp_name'][$i] : $files['tmp_name'];
                $name = $isMulti ? $files['name'][$i] : $files['name'];
                $error = $isMulti ? $files['error'][$i] : $files['error'];

                if ($error === UPLOAD_ERR_OK && is_uploaded_file($tmpName)) {
                    $cleanName = time() . '_' . preg_replace("/[^a-zA-Z0-9.]+/", "-", basename($name));
                    $targetPath = $targetDir . DIRECTORY_SEPARATOR . $cleanName;
                    
                    if (move_uploaded_file($tmpName, $targetPath)) {
                        $uploadedFiles[] = $cleanName;
                    }
                }
            }
        }
        return $uploadedFiles;
    }

    // 4. Processando Arquivos Binários
    $brandFiles = array_merge(
        handleUploads('upload_logo', $brandDir),
        handleUploads('upload_brandbook', $brandDir)
    );
    
    $assetFiles = handleUploads('upload_fotos', $assetsDir);
    $feedbackFiles = handleUploads('upload_prints', $feedbacksDir);

    // 5. Gerando os arquivos Markdown (O MegaPrompt e o Registro)
    $megaPrompt = "# WF-01 INTAKE COMPLETE: INICIAR PROJETO\n";
    $megaPrompt .= "> Sistema Handoff PHP v6.0\n\n";
    
    $megaPrompt .= "## 01. IDENTIFICAÇÃO BÁSICA\n";
    $megaPrompt .= "- Projeto: " . ($_POST['projeto_nome'] ?? 'N/A') . "\n";
    $megaPrompt .= "- Cliente/Marca: " . ($_POST['cliente_marca'] ?? 'N/A') . "\n";
    $megaPrompt .= "- Nicho: " . ($_POST['nicho'] ?? 'N/A') . "\n";
    $megaPrompt .= "- Tipo: " . ($_POST['tipo_projeto'] ?? 'N/A') . "\n\n";

    $megaPrompt .= "## 02. PRODUTO\n";
    $megaPrompt .= "**Oferta Principal:**\n> " . ($_POST['oferta'] ?? 'N/A') . "\n\n";
    $megaPrompt .= "**Diferencial:**\n> " . ($_POST['diferencial'] ?? 'N/A') . "\n\n";

    $megaPrompt .= "## 03. PÚBLICO E DORES (StoryBrand)\n";
    $megaPrompt .= "- Dor Externa: " . ($_POST['dor_externa'] ?? 'N/A') . "\n";
    $megaPrompt .= "- Dor Interna: " . ($_POST['dor_interna'] ?? 'N/A') . "\n\n";

    $megaPrompt .= "## 04. CONSCIÊNCIA (Schwartz)\n";
    $megaPrompt .= "- Nível: " . ($_POST['schwartz'] ?? 'N/A') . "\n\n";

    $megaPrompt .= "## 05. AUTORIDADE E FEEDBACKS\n";
    $megaPrompt .= "- Link GMB/ReclameAqui: " . ($_POST['link_gmb'] ?? 'N/A') . "\n";
    $megaPrompt .= "- Transcrição Feedbacks:\n> " . ($_POST['transcricao_feedbacks'] ?? 'N/A') . "\n\n";

    $megaPrompt .= "## 06. ASSETS E ANEXOS (Salvos no Disco)\n";
    $megaPrompt .= "- Brand/Logos: " . count($brandFiles) . " arquivo(s)\n";
    $megaPrompt .= "- Fotos/Assets: " . count($assetFiles) . " arquivo(s)\n";
    $megaPrompt .= "- Prints Feedbacks: " . count($feedbackFiles) . " arquivo(s)\n\n";

    $megaPrompt .= "---\n### INSTRUÇÃO AO MAESTRO:\nLeia este arquivo e acesse os diretórios `/brand` e `/assets` para construir o projeto.";

    // Salvando os markdowns
    file_put_contents($projectDir . DIRECTORY_SEPARATOR . 'briefing.md', $megaPrompt);
    file_put_contents($projectDir . DIRECTORY_SEPARATOR . 'registro.md', "# Registro do Intake Inicial\n\nData: " . date('Y-m-d H:i:s') . "\n\nStatus: Preenchido pelo Desenvolvedor.");

    // 6. Retorno de Sucesso
    echo json_encode([
        'success' => true, 
        'message' => 'Projeto criado, pastas estruturadas e arquivos salvos com sucesso!',
        'path' => $projectDir
    ]);

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
