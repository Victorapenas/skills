---
name: sandbox
description: >
  Ative para executar testes do sistema sem deixar arquivos permanentes.
  Cria ambiente temporário, executa os testes solicitados, reporta resultados
  e apaga tudo. Use quando quiser validar se benchmark, imagens, orquestrador
  ou qualquer outro agente está funcionando corretamente.
---

# Agente Sandbox — Ambiente de Testes Temporário

## Função
Criar um ambiente isolado para testar qualquer parte do sistema,
executar os testes, reportar o que funcionou e o que falhou,
e apagar todos os arquivos criados ao final. Nenhum arquivo de teste
fica permanente na pasta de projetos reais.

## Pasta Temporária
Todos os testes rodam em:
`C:\skills\__sandbox_temp\`
Esta pasta é criada no início de cada sessão de testes e apagada
completamente ao final. Nunca usar pastas de projetos reais para testes.

## Menu de Testes Disponíveis
Quando acionado, apresentar este menu:

**SANDBOX — O que você quer testar?**

[ ] T1 — Orquestrador: intake + decisão de arquitetura
[ ] T2 — Benchmark: pesquisa de mercado + extração visual
[ ] T3 — Geração de imagem: criar asset com IA
[ ] T4 — Build PHP: gerar estrutura de código
[ ] T5 — Pixels e rastreamento: Facebook, Google, UTM
[ ] T6 — Fluxo completo: do briefing até o wireframe
[ ] T7 — Qualidade visual: avaliar LP gerada

Digite os números dos testes que quer rodar (ex: T1 T2 T3)
ou TODOS para rodar o conjunto completo.

---

## T1 — Teste do Orquestrador
O que testa: Se o orquestrador recebe um briefing e toma
as decisões corretas automaticamente.

**Dado de entrada fixo (não precisa preencher):**
Cliente: Teste Sandbox
Nicho: fabricação de trailers e estúdios truck
Objetivo: capturar leads
Hospedagem: Hostinger compartilhado
Logo: não enviada
Prazo: 1 semana

**Critérios de aprovação:**
- Identificou arquitetura corretamente (Vanilla PHP)
- Criou contexto-projeto.md na pasta sandbox
- Não pediu permissão para avançar após decisão
- Definiu sequência de módulos automaticamente
- Registrou decisões no contexto-projeto.md

**Resultado:** APROVADO / REPROVADO + o que falhou

---

## T2 — Teste de Benchmark e Pesquisa de Mercado
O que testa: Se o sistema consegue pesquisar referências visuais
de qualidade mesmo quando o nicho exato não tem sites visualmente bons.

**Lógica de nicho similar — IMPORTANTE:**
Quando o nicho primário não tem referências visuais fortes,
o sistema deve automaticamente buscar em nichos similares.

**Hierarquia de busca para nicho de trailers/veículos especiais:**
1º Nicho exato: "trailer fabricação" → se visual fraco, expandir
2º Nicho similar: "veículos customizados", "motorhomes", "caminhões premium"
3º Nicho estético: "equipamentos industriais premium", "máquinas sob medida"
4º Referência de qualidade visual: Behance, Awwwards, Dribbble
   buscar: "industrial premium website", "heavy equipment landing page"
5º Marca referência: sites de marcas como Caterpillar, John Deere, Volvo Trucks

**Plataformas de benchmark em ordem de prioridade:**
- Behance.net — busca por: "[nicho] website design", "[nicho] landing page"
- Awwwards.com — filtro: sites premiados do setor
- Dribbble.com — busca por: "[nicho] web design"
- Pinterest — busca por: "[nicho] website inspiration"
- Google — busca por: "[nicho] + site:.com.br" para mercado brasileiro
- SimilarWeb / SEMrush — sites mais visitados do nicho

**Critérios de aprovação:**
- Buscou em pelo menos 3 fontes diferentes
- Quando nicho primário teve visual fraco, buscou nicho similar
- Extraiu paleta de cores de pelo menos 2 referências
- Identificou padrão tipográfico das referências
- Listou elementos visuais recorrentes nas referências boas
- Produziu spec-referencias.md com hexadecimais reais

**Como avaliar qualidade visual das referências encontradas:**
- Tem hierarquia visual clara? (título > subtítulo > corpo)
- Usa espaço em branco com intenção?
- Imagens são profissionais e de alta qualidade?
- CTA está em evidência?
- Seria considerado bonito por um designer experiente?
Se não: descartar e buscar próxima referência

**Resultado:** APROVADO / REPROVADO + fontes usadas + qualidade das refs

---

## T3 — Teste de Geração de Imagem
O que testa: Se a geração de imagem funciona, produz resultado
de qualidade e entrega o Prompt Master corretamente.

**Teste A — Produto:**
Gerar imagem de um trailer/estúdio truck em estilo product photography premium.
PNG com fundo transparente, 800x800px.

**Teste B — Elemento 3D:**
Gerar ícone 3D estilo premium para uso em LP.
PNG transparente, 120x120px.

**Teste C — Hero background:**
Gerar imagem de fundo para seção Hero.
JPEG, 1920x1080px, estilo industrial premium.

**Critérios de aprovação para cada geração:**
- Imagem foi gerada (não deu erro)
- Qualidade visual é profissional
- Formato e dimensões corretos
- Peso dentro do limite (Hero ≤ 400kb, Produto ≤ 300kb, Ícone ≤ 50kb)
- Prompt Master foi entregue (para uso em outras IAs)
- Negative prompt foi incluído

**Resultado:** APROVADO / REPROVADO + qual teste falhou + motivo

---

## T4 — Teste de Build PHP
O que testa: Se o construtor PHP gera código funcional,
com CSS correto e segurança implementada.

Gera uma LP mínima com:
- Header fixo com logo placeholder
- Seção Hero com headline e CTA
- Formulário de captura (nome + email)
- Rodapé simples

**Critérios de aprovação:**
- index.php criado e válido
- style.css criado com variáveis CSS no :root
- Tipografia fluida com clamp() presente
- Mobile-first: base CSS para mobile, media query para desktop
- PDO com prepared statements no salvar-lead.php
- CSRF token no formulário
- .htaccess com HTTPS forçado e headers de segurança
- Nenhum erro de sintaxe PHP

**Teste de servidor:**
Tentar rodar com: `php -S localhost:8181 -t __sandbox_temp/output/code/`
Se funcionar: página carrega em `http://localhost:8181`

**Resultado:** APROVADO / REPROVADO + erros encontrados

---

## T5 — Teste de Pixels e Rastreamento
O que testa: Se os pixels e códigos de rastreamento
são inseridos corretamente no HTML.

**Testa inserção de:**
Facebook Pixel:
```html
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
...
fbq('init', 'PIXEL_ID_TESTE');
fbq('track', 'PageView');
</script>
```

Google Tag Manager:
```html
<!-- GTM -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];...})(window,document,'script','dataLayer','GTM-XXXXX');</script>
```

Google Analytics 4:
```html
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XXXXXX"></script>
```

**UTM Parameters** — testar se a LP captura e armazena:
- utm_source
- utm_medium
- utm_campaign
- utm_content

**Código JavaScript para capturar UTMs:**
```javascript
function capturarUTMs() {
  const params = new URLSearchParams(window.location.search);
  const utms = {
    source: params.get('utm_source') || '',
    medium: params.get('utm_medium') || '',
    campaign: params.get('utm_campaign') || '',
    content: params.get('utm_content') || ''
  };
  // Salvar no localStorage para enviar com o formulário
  localStorage.setItem('utms', JSON.stringify(utms));
  return utms;
}
```

**Evento de conversão no envio do formulário:**
```javascript
// Disparar após envio bem-sucedido
fbq('track', 'Lead');
gtag('event', 'generate_lead');
```

**Critérios de aprovação:**
- Pixel FB inserido no <head> antes do </head>
- GTM inserido no <head> e no <body>
- GA4 inserido no <head>
- UTMs capturados do URL e salvos
- UTMs enviados junto ao formulário
- Evento de conversão disparado após envio

**Como validar em produção:**
- Facebook: usar Facebook Pixel Helper (extensão Chrome)
- Google: usar Tag Assistant (extensão Chrome)
- UTMs: testar URL com parâmetros e verificar no console

**Resultado:** APROVADO / REPROVADO + o que falta implementar

---

## T6 — Teste de Fluxo Completo
O que testa: Todo o fluxo do intake até o wireframe
funcionando em sequência sem interrupções desnecessárias.

**Dados de entrada:**
Nicho: fabricação de trailers e estúdios truck
Objetivo: capturar leads B2B (empresas de eventos, TV, cinema)
Diferencial: personalização total, prazo rápido, qualidade premium
Público: produtoras de conteúdo, emissoras, empresas de eventos
Logo: não enviada
Hospedagem: Hostinger

**Sequência esperada (automática, sem pedir permissão):**
- Orquestrador recebe → cria contexto-projeto.md ← (verificar)
- Briefing organiza dados → briefing.md ← (verificar)
- Benchmark pesquisa mercado → benchmark.md ← (verificar)
- Estrutura LP → apresenta mapa ← (PARA e aguarda aprovação)
- Operador aprova → copy gerado → copy.md ← (verificar)

**Critérios de aprovação:**
- Etapas 1 a 3 executadas sem pedir permissão
- Etapa 4 parou corretamente para aprovação
- contexto-projeto.md existe e tem dados corretos
- benchmark.md tem referências de qualidade
- Tempo total razoável (estimativa < 10 min)

**Resultado:** APROVADO / REPROVADO + onde travou ou pediu permissão indevida

---

## T7 — Teste de Qualidade Visual
O que testa: Se a LP gerada parece profissional e visualmente
agradável em desktop e mobile.

**Checklist visual desktop:**
- Não parece template genérico
- Tem identidade visual própria
- Hierarquia visual clara (o olho sabe onde ir)
- Cores são coerentes e harmoniosas
- Tipografia tem personalidade
- Imagens são de qualidade profissional
- Espaçamento generoso e respirado

**Checklist visual mobile:**
- Layout não parece comprimido ou massivo
- Headline não passa de 3 linhas em 375px
- CTA visível above the fold no mobile
- Cards não ficam pesados empilhados
- Botões têm tamanho adequado para toque (≥52px)
- Imagens não dominam mais de 35% da tela

**Resultado:** APROVADO / REPROVADO + print dos problemas visuais

---

## Execução e Limpeza

**Antes de rodar qualquer teste:**
```bash
# Criar pasta sandbox
mkdir -p C:\skills\__sandbox_temp\output\code
mkdir -p C:\skills\__sandbox_temp\materiais
```

**Ao finalizar todos os testes:**
```bash
# Apagar tudo
Remove-Item -Recurse -Force "C:\skills\__sandbox_temp"
```

## Relatório Final Obrigatório:

```
RELATÓRIO DE SANDBOX — [data e hora]
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

TESTES EXECUTADOS: [lista]

RESULTADOS:
T1 Orquestrador:     [✅ APROVADO / ❌ REPROVADO]
T2 Benchmark:        [✅ APROVADO / ❌ REPROVADO]
T3 Geração imagem:   [✅ APROVADO / ❌ REPROVADO]
T4 Build PHP:        [✅ APROVADO / ❌ REPROVADO]
T5 Pixels/UTMs:      [✅ APROVADO / ❌ REPROVADO]
T6 Fluxo completo:   [✅ APROVADO / ❌ REPROVADO]
T7 Qualidade visual: [✅ APROVADO / ❌ REPROVADO]

PROBLEMAS ENCONTRADOS:
[lista detalhada do que falhou e por quê]

RECOMENDAÇÕES:
[o que precisa ser corrigido no sistema]

ARQUIVOS TEMPORÁRIOS: apagados ✅

STATUS GERAL DO SISTEMA: [PRONTO / PRECISA DE AJUSTES]
```
Após emitir o relatório, apagar a pasta `__sandbox_temp` completamente.
