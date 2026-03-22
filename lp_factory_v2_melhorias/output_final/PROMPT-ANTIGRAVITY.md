# PROMPT PARA O ANTIGRAVITY
## Leitura, Diagnóstico e Evolução do Projeto

---

Você tem acesso à pasta zipada do projeto PHP Landing Page Factory. Sua missão é ler todos os arquivos, entender a arquitetura completa e evoluir o sistema com base nas melhorias descritas abaixo.

---

## PARTE 1 — LEITURA COMPLETA

Comece lendo estes arquivos na ordem:

1. `GEMINI.md` — regras globais do sistema
2. `projetos/_modelo/registro.md` — modelo de registro de projeto
3. `projetos/_modelo/contexto-projeto.md` — cache de contexto (se existir)
4. Todos os arquivos `skills/*/SKILL.md` — um por um
5. Todos os arquivos `workflows/*.md`
6. `templates/briefing-template.md`

Após a leitura, faça um mapeamento mental de:
- O que cada skill faz e qual é seu output
- Como as skills se conectam entre si
- Onde há dependências entre etapas
- O que falta ou está incompleto

---

## PARTE 2 — DIAGNÓSTICO RÁPIDO

Antes de fazer qualquer alteração, apresente um diagnóstico em formato de lista:

```
PROBLEMAS IDENTIFICADOS:
[ ] [problema encontrado — arquivo afetado — impacto]

PONTOS FORTES A PRESERVAR:
[ ] [o que está bom e não deve ser alterado]

MELHORIAS PRIORITÁRIAS:
[ ] [melhoria urgente — arquivo a alterar]
```

Aguarde minha confirmação antes de prosseguir para a Parte 3.

---

## PARTE 3 — MELHORIAS A APLICAR

### 3.1 — GEMINI.md

Atualize o GEMINI.md com:

- Adicionar `contexto-projeto.md` como leitura obrigatória antes de qualquer skill
- Adicionar três gates bloqueantes: logo antes do build, aprovação de estrutura antes do HTML, QA antes do deploy
- Adicionar as novas skills ao mapa: `analisador-lp`, `extrator-referencias`, `refinamento-mobile`
- Adicionar skills de referência do pacote com instrução de quando usar: `design-spells`, `baseline-ui`, `product-design`
- Remover redundâncias que estão consumindo tokens sem necessidade
- Manter o arquivo em no máximo 120 linhas

### 3.2 — Criar skill `skills/analisador-lp/SKILL.md`

Esta skill não existe ainda. Crie com base nesta especificação:

**Função:** Analisar uma landing page existente de forma estruturada, em blocos, não tentando processar tudo de uma vez.

**Protocolo:**
1. Recebe URL ou prints da LP de referência
2. Divide a análise em 5 blocos: above the fold, seção 2-3, meio da página, zona de oferta, rodapé
3. Para cada bloco: analisa estrutura, copy (headline e CTA), visual (cores, tipografia, imagens), conversão (urgência, prova social, formulário)
4. Repete a análise para mobile (375px) — identifica diferenças e problemas
5. Extrai padrões visuais: paleta de cores, tipografia, composição, estilo de imagens
6. Gera diagnóstico de qualidade com nota 1-5 por critério
7. Produz spec visual extraída para alimentar diretamente a skill `direcao-visual`

**Arquivo de saída:** `/projetos/[nome]/analise-lp-referencia.md`

### 3.3 — Criar skill `skills/extrator-referencias/SKILL.md`

Esta skill não existe ainda. Crie com base nesta especificação:

**Função:** Transformar referências visuais em especificação técnica concreta.

**Aceita:** URL de site, print/screenshot, perfil do Instagram, descrição textual, nome de marca.

**Para cada referência extrai:** paleta de cores em hex, família tipográfica, tom visual, padrão de composição, estilo de imagens.

**Quando há múltiplas referências:** cria tabela comparativa e propõe síntese que combina o melhor de cada uma com a identidade do cliente.

**Regra crítica:** se o cliente enviou logo, os hexadecimais da logo têm prioridade absoluta sobre qualquer referência externa.

**Arquivo de saída:** `/projetos/[nome]/spec-referencias.md`

### 3.4 — Criar skill `skills/refinamento-mobile/SKILL.md`

Esta skill não existe ainda. Crie com base nesta especificação:

**Função:** Revisão específica de CSS para qualidade visual mobile — não apenas responsividade técnica.

**Problemas que deve identificar e corrigir:**
- Tipografia sem escala fluida (fontes fixas inadequadas para mobile)
- Seções com padding excessivo no mobile
- Hero com imagem dominante demais em telas pequenas
- CTAs sem área de toque de pelo menos 48px
- Cards de benefícios que ficam grandes demais quando colapsam
- Depoimentos pesados no mobile
- Formulários que acionam zoom automático no iOS (inputs com font-size menor que 16px)

**CSS a incluir obrigatoriamente:**
- Uso de `clamp()` para tipografia fluida
- Sistema de espaçamento escalonado com variáveis CSS
- Cards com layout horizontal no mobile
- Inputs com `font-size: 16px` mínimo
- Botões full-width no mobile com altura mínima de 52px

**Checklist de saída:** lista de 15 itens verificados com status aprovado/reprovado.

### 3.5 — Criar `projetos/_modelo/contexto-projeto.md`

Este arquivo não existe ainda. Crie como um template de cache de contexto com:

- Identidade do projeto (nome, cliente, segmento, tipo, hospedagem)
- Status atual (etapa, próxima etapa, última aprovação humana)
- Decisões tomadas — não perguntar novamente (arquitetura, logo, paleta, fontes, CTA)
- Resumo do briefing em 5 linhas
- Materiais confirmados
- Spec visual resumida (cores e fontes em uma tabela compacta)
- Histórico de decisões

**Instrução clara no arquivo:** todos os agentes leem este arquivo primeiro, usam os dados aqui e registram novas decisões aqui antes de prosseguir.

### 3.6 — Atualizar skill `skills/benchmark/SKILL.md`

Adicione ao benchmark existente:

- Protocolo de análise em dois viewports: desktop (1440px) e mobile (375px) explicitamente
- Extração de padrões visuais além da análise textual: cores dominantes em hex, tipografia identificada, estilo de imagens
- Conexão com `spec-referencias.md`: ao final, benchmark alimenta diretamente o extrator de referências
- Critério de mobile: identifica se a LP analisada é "mobile-first real" ou apenas "responsiva técnica"

### 3.7 — Atualizar skill `skills/orquestrador/SKILL.md`

Adicione:

- Instrução para criar `contexto-projeto.md` no início do projeto
- Checkpoint de logo como bloqueante explícito: antes de acionar o construtor, verificar se logo está em `/materiais/marca/logo/` ou registrar como dispensada
- Referência ao fluxo revisado com as duas novas skills: `extrator-referencias` após `analisador-marca`, e `refinamento-mobile` após `construtor-php`

### 3.8 — Atualizar skill `skills/construtor-php/SKILL.md`

Adicione no módulo de CSS:

- Uso obrigatório de `clamp()` para tipografia fluida
- Sistema de espaçamento com variáveis CSS escalonadas por breakpoint
- Cards com layout horizontal no mobile (benefícios)
- Inputs com `font-size: 16px` mínimo para evitar zoom no iOS
- Botões full-width no mobile

### 3.9 — Atualizar skill `skills/qa/SKILL.md`

Adicione ao checklist mobile:

- Verifica uso de `clamp()` na tipografia
- Verifica `font-size: 16px` mínimo nos inputs
- Verifica altura mínima dos botões (52px)
- Verifica layout horizontal dos cards no mobile
- Verifica se hero não domina mais de 40% da viewport mobile

### 3.10 — Atualizar `workflows/WF-02-estrutura-copy.md`

Expanda com:

- Critério de qualidade do wireframe: o que define wireframe aprovado vs reprovado
- Critério de qualidade do copy: checklist de 5 itens que definem copy pronto (nenhum bullet point artificial, nenhuma frase com cara de IA, headlines específicas, CTAs em primeira pessoa, micro-copy presente)
- Instrução de atualizar `contexto-projeto.md` após aprovação de cada etapa

---

## PARTE 4 — VERIFICAÇÃO FINAL

Após aplicar todas as melhorias, execute esta verificação:

1. O GEMINI.md está com menos de 120 linhas?
2. `contexto-projeto.md` existe no modelo?
3. As três skills novas foram criadas?
4. O orquestrador tem o gate de logo?
5. O benchmark tem análise mobile vs desktop?
6. O construtor usa `clamp()` e `font-size: 16px`?
7. O QA verifica os novos critérios mobile?

Se algum item falhar, corrija antes de concluir.

---

## PARTE 5 — ENTREGA

Ao terminar, apresente:

```
MELHORIAS APLICADAS:
[ ] GEMINI.md atualizado
[ ] skill analisador-lp criada
[ ] skill extrator-referencias criada
[ ] skill refinamento-mobile criada
[ ] contexto-projeto.md criado
[ ] benchmark atualizado com mobile
[ ] orquestrador com gate de logo
[ ] construtor com CSS fluido
[ ] qa com novos critérios mobile
[ ] WF-02 expandido

ARQUIVOS MANTIDOS SEM ALTERAÇÃO:
[lista do que não foi tocado]

PRÓXIMO PASSO RECOMENDADO:
[o que testar primeiro para validar as melhorias]
```

---

## REGRAS DE OPERAÇÃO DURANTE ESTE PROCESSO

- Nunca apague conteúdo que funciona sem motivo claro
- Versione os arquivos alterados: se o SKILL.md já existe, crie SKILL-v2.md ou atualize e registre no histórico
- Se encontrar algo que não foi listado mas claramente precisa de melhoria, sinalize antes de alterar
- Não faça mais de 5 alterações de arquivo por mensagem — divida em etapas confirmadas
- Mantenha todos os arquivos em português, exceto os prompts de geração de imagem que ficam em inglês
