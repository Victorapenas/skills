<?php
// Scanner de Consistência - PHP Landing Page Factory V2
$baseDir = "c:\\skills";
$skillsDir = array_filter(glob($baseDir . '/*'), 'is_dir');

$summary = [
    'skills_encontradas' => 0,
    'skills_validadas' => 0,
    'erros_transicao_interrompida' => [],
    'ausencia_contexto_no_fim' => [],
    'ausencia_regras_p3_p4_p6' => []
];

foreach ($skillsDir as $dir) {
    if (basename($dir) === 'projetos' || basename($dir) === 'workflows') continue;
    
    $skillFile = $dir . '/SKILL.md';
    if (!file_exists($skillFile)) continue;
    
    $summary['skills_encontradas']++;
    $content = file_get_contents($skillFile);
    $name = basename($dir);
    
    // 1: Verifica expurgo de permissões
    if (preg_match('/(deseja continuar|posso seguir|gostaria que eu|você aprova|devo ir)/i', $content)) {
        $summary['erros_transicao_interrompida'][] = $name;
    }
    
    // 2: Verifica terminação de arquivo apontando para contexto-projeto.md
    if (!preg_match('/Atualize (o )?contexto-projeto\.md/i', $content)) {
         $summary['ausencia_contexto_no_fim'][] = $name;
    }
    
    // 3: Verificações Específicas
    if ($name === 'qa') {
        if (!strpos($content, 'Varredura de Segurança') || !strpos($content, 'Hero abaixo de 400kb') || !strpos($content, 'Nenhuma frase de IA')) {
            $summary['ausencia_regras_p3_p4_p6'][] = $name . ' (Faltou P3, P4 ou P6)';
        }
    }
    
    if ($name === 'gerador-imagem') {
         if (!strpos($content, 'Triagem de Lotes') || !strpos($content, 'Verificação de Peso')) {
             $summary['ausencia_regras_p3_p4_p6'][] = $name . ' (Faltou Lotes ou Peso)';
         }
    }
    
    $summary['skills_validadas']++;
}

// Verifica Projeto e regras centrais
$gemini = file_get_contents($baseDir . '/GEMINI.md');
if (!strpos($gemini, 'Sessões Longas')) $summary['ausencia_regras_p3_p4_p6'][] = 'GEMINI.md (Sistema de sessões falhou)';

echo json_encode($summary, JSON_PRETTY_PRINT);
?>
