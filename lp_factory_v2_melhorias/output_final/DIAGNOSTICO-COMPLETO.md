# Diagnóstico Completo — PHP Landing Page Factory
**Versão analisada:** lp_factory_sistema v1**
**Pacote de skills:** 993 skills analisadas**
**Data:** Março 2026

---

## Resumo Executivo

O projeto tem uma base sólida. A arquitetura de agentes está bem pensada, a separação de responsabilidades é clara e o GEMINI.md cobre os casos mais comuns. O que falta não é estrutura — é profundidade em três áreas críticas: **análise de LP**, **qualidade visual mobile** e **extração de referências visuais**. Além disso, há dois gargalos operacionais que precisam ser resolvidos antes de qualquer outra coisa.

---

## Diagnóstico por Área

---

### 1. Análise de Landing Page — Problema Crítico

**O que está errado:**
A skill `benchmark` e a skill `analisador-marca` descrevem o que analisar, mas não resolvem o problema real: como analisar uma LP inteira quando o scroll é longo e o contexto visual se perde.

Quando o Firebase Studio tenta analisar uma LP completa de uma URL, o que acontece na prática é que:
- O agente faz fetch da URL e recebe HTML bruto
- Tenta interpretar estrutura a partir do código, não da experiência visual
- Perde informações de CSS, renderização, layout real e experiência mobile
- O resultado é uma análise superficial que não captura como a página realmente se comporta

**O que falta:**
Uma skill de análise de LP que trabalha em **blocos segmentados**, não tentando processar tudo de uma vez. O protocolo correto é:

1. Capturar a LP em seções (above the fold, meio, bottom) separadamente
2. Analisar cada bloco com foco específico
3. Consolidar em um mapa estrutural completo
4. Comparar comportamento desktop vs mobile explicitamente

**Impacto se não resolver:**
O benchmark fica superficial, as referências visuais não são aproveitadas de verdade, e a LP gerada não incorpora os padrões que realmente funcionam nas referências do cliente.

---

### 2. Logo e Identidade Visual — Problema de Execução

**O que está errado:**
O GEMINI.md diz "logo é prioridade absoluta". A skill `direcao-visual` também menciona isso. Mas não há nenhum **gate bloqueante** que impeça o construtor de avançar sem confirmar a logo.

Na prática, o que acontece é: o agente "sabe" que a logo é importante, mas quando o fluxo acelera, ele gera o projeto com um placeholder ou ignora. Regra sem gate não funciona.

**O que falta:**
Um checkpoint explícito no orquestrador e no construtor-php que bloqueia o avanço se a logo não foi confirmada como disponível ou explicitamente dispensada pelo operador.

**Impacto se não resolver:**
Entrega um projeto sem a identidade real do cliente. Isso é retrabalho certo.

---

### 3. Coleta de Materiais — Problema de Fluxo

**O que está errado:**
A skill `coleta-materiais` e a skill `briefing` são boas individualmente, mas não há um **intake unificado** que combine tudo em uma única sessão. O resultado na prática é que o operador acaba sendo perguntado sobre a mesma coisa em momentos diferentes (uma vez no briefing, outra no analisador de marca, outra na direção visual).

**O que falta:**
Um **Formulário de Intake Único** que:
- Coleta briefing + materiais + links + referências em uma só apresentação
- Separa visualmente as duas camadas (cliente e operador)
- Aceita respostas parciais sem travar
- Não repete perguntas em etapas posteriores

**Impacto se não resolver:**
Desperdício de tokens, atrito operacional e respostas inconsistentes entre etapas.

---

### 4. Qualidade Visual Mobile — Problema de CSS

**O que está errado:**
A skill `construtor-php` tem boa estrutura de CSS com variáveis e mobile-first no papel. Mas faltam padrões específicos para os problemas mais comuns que fazem uma LP parecer "pesada" no celular:

- Tipografia sem escala fluida (fontes fixas que ficam grandes demais ou pequenas demais)
- Seções com padding excessivo no mobile
- Imagens que não se adaptam corretamente
- Hierarquia visual quebrada em telas pequenas
- Botões de CTA sem área de toque adequada
- Espaçamento entre elementos que funciona no desktop mas esmaga no mobile

**O que falta:**
Padrões CSS específicos de refinamento mobile com valores reais testados, não apenas a estrutura genérica de `@media (min-width: 768px)`.

**Impacto se não resolver:**
LP visualmente boa no desktop, "massiva" e mal distribuída no celular. Isso mata a taxa de conversão no mobile, que hoje representa 70%+ do tráfego na maioria dos nichos.

---

### 5. Extração de Referências Visuais — Skill Faltando

**O que está errado:**
O projeto não tem nenhuma skill para **extrair e catalogar elementos visuais de páginas de referência**. Quando o cliente manda uma URL dizendo "quero algo parecido com isso", o sistema não tem um processo definido para:
- Identificar as cores exatas usadas
- Mapear a tipografia
- Extrair o padrão de espaçamento
- Documentar a composição do hero
- Registrar como os CTAs são apresentados

O benchmark atual é textual — ele descreve o que viu, mas não extrai de forma estruturada.

**O que falta:**
Uma skill `extrator-referencias` que processa URLs de referência e retorna uma especificação visual pronta para alimentar a `direcao-visual`.

**Impacto se não resolver:**
Referências visuais do cliente viram descrições vagas que o sistema interpreta de forma inconsistente.

---

### 6. Benchmarking — Superficial e Sem Mobile

**O que está errado:**
A skill `benchmark` analisa uma LP como texto e faz descrição qualitativa. Falta:
- Análise explícita da experiência mobile vs desktop
- Extração de padrões recorrentes entre múltiplas referências
- Registro dos elementos visuais (não só descritos, mas catalogados)
- Conexão direta entre o benchmark e a spec visual gerada

**O que falta:**
Protocolo de análise em dois viewports (desktop 1440px / mobile 375px) com checklist específico para cada um.

---

### 7. Consumo de Tokens — Ineficiência Estrutural

**O que está errado:**
Três fontes de desperdício identificadas:

**Fonte 1 — Contexto repetido:** Cada skill lê `briefing.md`, `analise-marca.md`, `benchmark.md` separadamente. Se o operador já passou as informações na conversa, o sistema às vezes pede que ele repita via arquivo.

**Fonte 2 — Skills com instrução em demasia:** A skill `construtor-php` tem 449 linhas. A `gerador-imagem` tem 390 linhas. Quando o Firebase Studio carrega essas skills, consome tokens só na leitura. Skills muito longas devem ser divididas em módulos.

**Fonte 3 — Perguntas distribuídas:** Mesmo com a melhoria do briefing, o fluxo ainda tem pontos onde o agente pergunta coisas que poderiam ter sido coletadas no intake.

**O que falta:**
- Skills mais curtas e focadas (máximo 200 linhas por SKILL.md)
- Um `contexto-projeto.md` que centraliza todas as decisões tomadas para evitar rereading
- Módulos separados para partes extensas (ex: `construtor-php/modulo-seguranca.md`)

---

### 8. Workflows — Bem Estruturados, Pouco Detalhados

**O que está errado:**
Os workflows WF-02 a WF-05 são muito curtos (48 a 128 linhas). Eles definem o que fazer mas não definem os critérios de transição entre etapas, o que fazer quando algo falha e como o operador valida cada entrega.

**WF-01** (intake) está bem feito — é o mais completo.
**WF-02** (estrutura/copy) tem só 48 linhas — insuficiente.
**WF-03** (visual/imagens) está razoável.
**WF-04/05** (build/deploy) está bem mas não trata falhas de QA.

---

### 9. Skills de Referência do Pacote — Subutilizadas

**O que está errado:**
O projeto incluiu 4 skills de referência do pacote (`frontend-design-ref`, `copywriting-ref`, `image-studio-ref`, `php-pro-ref`) mas não as integrou ao GEMINI.md. O Gemini não sabe que elas existem nem quando usá-las.

**Do pacote de 993 skills, estas são as mais relevantes para o projeto e estão sendo ignoradas:**

| Skill no pacote | Valor para o projeto |
|---|---|
| `design-spells` | Micro-interações que tornam a LP memorável |
| `product-design` | Princípios Apple de design — nível de qualidade visual |
| `baseline-ui` | Gate de qualidade que bloqueia CSS ruim |
| `magic-ui-generator` | Componentes premium para hero, pricing, formulários |
| `competitor-alternatives` | Estrutura para páginas de comparação |
| `ab-test-setup` | Fundamento para testar variações de copy e CTA |
| `programmatic-seo` | Otimização de LP para tráfego orgânico |
| `local-legal-seo-audit` | SEO local para clientes com negócio físico |

---

## Tabela de Prioridades

| # | Problema | Impacto | Esforço | Prioridade |
|---|---|---|---|---|
| 1 | Intake unificado — coleta tudo de uma vez | Alto | Baixo | 🔴 Urgente |
| 2 | Gate bloqueante para logo | Alto | Baixo | 🔴 Urgente |
| 3 | CSS mobile refinado com valores reais | Alto | Médio | 🔴 Urgente |
| 4 | Skill de análise de LP em blocos | Alto | Médio | 🟡 Alta |
| 5 | Skill de extração de referências visuais | Alto | Médio | 🟡 Alta |
| 6 | Benchmark com análise mobile vs desktop | Médio | Médio | 🟡 Alta |
| 7 | Dividir skills longas em módulos | Médio | Baixo | 🟡 Alta |
| 8 | Integrar skills do pacote ao GEMINI.md | Médio | Baixo | 🟢 Normal |
| 9 | Workflows mais detalhados com critérios de falha | Médio | Médio | 🟢 Normal |
| 10 | contexto-projeto.md centralizado | Baixo | Baixo | 🟢 Normal |

---

## Pontos Fortes do Projeto

Para registrar o que está funcionando bem e não deve ser alterado:

- Separação clara de responsabilidades entre skills
- GEMINI.md bem escrito com regras de operação
- Skill `briefing` com formulário completo de uma vez
- Skill `orquestrador` com sequências pré-definidas
- Skill `copy` com lista explícita do que não fazer
- Skill `qa` com checklist detalhado por categoria
- Skill `gerador-imagem` com 4 modos bem definidos
- Estrutura de pastas por projeto com versionamento
- Regra de linguagem humana bem estabelecida

---

## Melhorias Recomendadas por Arquivo

### GEMINI.md
- Adicionar referência às skills do pacote (`design-spells`, `baseline-ui`, `product-design`)
- Adicionar protocolo de análise de LP em blocos
- Adicionar gate explícito para logo
- Reduzir para ~100 linhas — está grande demais para um arquivo de configuração global

### skills/orquestrador/SKILL.md
- Adicionar checkpoint de logo como gate bloqueante
- Adicionar instrução para usar `contexto-projeto.md` como cache de contexto

### skills/benchmark/SKILL.md
- Adicionar protocolo de análise desktop vs mobile
- Adicionar extração de elementos visuais (cores, tipografia, composição)
- Integrar com `extrator-referencias` (skill a criar)

### skills/construtor-php/SKILL.md
- Dividir em 3 módulos: `core.md`, `seguranca.md`, `css-mobile.md`
- Substituir CSS genérico por padrões testados de refinamento mobile

### skills/gerador-imagem/SKILL.md
- Dividir em 2 módulos: `pessoa-produto.md` e `elementos-zero.md`

### workflows/WF-02-estrutura-copy.md
- Expandir com critérios de qualidade por etapa
- Adicionar critério de transição (o que define que copy está pronto)

---

## Arquivos Novos a Criar

| Arquivo | Função |
|---|---|
| `skills/analisador-lp/SKILL.md` | Análise de LP em blocos — desktop e mobile |
| `skills/extrator-referencias/SKILL.md` | Extração visual de URLs de referência |
| `skills/refinamento-mobile/SKILL.md` | CSS premium para mobile |
| `skills/construtor-php/css-mobile.md` | Módulo de CSS mobile para o construtor |
| `projetos/_modelo/contexto-projeto.md` | Cache centralizado de contexto do projeto |

---

## Proposta de Fluxo Revisado

```
OPERADOR chega com: briefing + materiais + links + referências
              ↓
[INTAKE-ÚNICO] — Uma sessão, tudo coletado, dois toques humanos no máximo
              ↓
[ANALISADOR-MARCA] — Analisa links enviados (paralelo ao intake se houver links)
              ↓
[EXTRATOR-REFERENCIAS] — Extrai spec visual das referências do cliente/operador
              ↓
[BENCHMARK] — Estuda concorrentes com análise desktop + mobile
              ↓
[ESTRUTURA-LP] — Mapa de seções (aprovação humana aqui)
              ↓
[COPY] — Textos com linguagem humana (aprovação humana aqui)
              ↓
[DIRECAO-VISUAL] — Sistema de cores baseado em logo + referências extraídas
              ↓
[GERADOR-IMAGEM] — Assets por modo
              ↓
[CONSTRUTOR-PHP] — Build com módulos separados
              ↓
[REFINAMENTO-MOBILE] — Revisão e ajuste específico de mobile
              ↓
[QA] — Checklist completo (aprovação humana aqui)
              ↓
[DEPLOY]
```

**Pontos de aprovação humana:** Estrutura da LP, Copy, QA final — apenas 3 momentos, não mais.

**Cache de contexto:** `contexto-projeto.md` atualizado a cada etapa para evitar releitura de todos os arquivos.
