---
description: Workflow completo de briefing - coleta de requisitos para novo projeto
---

# WF-01 — Briefing Completo v6.0

**Trigger:** `@novo-projeto [nome]`
**Agentes:** Maestro → Entrevistador (01) + Receptor (02) + Leitor (03) — paralelo

## Etapas

### 1. Maestro cria estrutura do projeto
- Criar `/projetos/[nome]/`
- Criar registro.md + monitor.md + feedback-log.md
- Adicionar entrada em `/_projetos.md`
- Classificar tipo: Vanilla PHP ou Laravel

### 2. Entrevistador conduz 6 blocos + funil
- Bloco 1: Produto/Serviço (5 perguntas)
- Bloco 2: Público-Alvo (5 perguntas)
- Bloco 3: Objetivo da LP (5 perguntas)
- Bloco 4: Identidade Visual (5 perguntas)
- Bloco 5: Ativos Disponíveis (5 perguntas)
- Bloco 6: Técnico (5 perguntas)
- Bloco Extra: Funil (4 perguntas)

### 3. Receptor organiza ativos do cliente (paralelo)
- Fotos, logos, documentos, vídeos → `/projetos/[nome]/ativos/`

### 4. Leitor extrai branding (paralelo, se URL disponível)
- Via MCP Firecrawl: cores hex, fontes, logo, favicon, tom de voz

### 5. Gerar briefing.md
- Formato com 11 seções
- Validar: APTO / INSUFICIENTE

### ⏸️ APROVAÇÃO HUMANA #1

### 6. Aprovado → `@workflow WF-02`
