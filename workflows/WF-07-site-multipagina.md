---
description: Workflow de site institucional multi-página com 7 etapas e 4 gates
---

# WF-07 — Site Institucional Multi-Página v6.0

**Trigger:** Briefing classifica como "site institucional"
**Agentes:** Arq.Site (09) lidera (substitui Arq.LP)
**Estimativa:** 14-26h | 4 gates de aprovação

## Etapas

### 1. Sitemap + hierarquia de páginas
- Arq.Site cria estrutura de navegação
- Definir páginas: Home, Sobre, Serviços, Portfólio, Contato, etc.
- → sitemap.md

### GATE 1 — Maestro valida sitemap

### 2. Copy POR PÁGINA
- Redator escreve copy individual para cada página
- Manter consistência de tom e mensagem
- → copy-[pagina].md para cada página

### 3. Design system unificado
- Diretor de Arte: paleta, tipografia, componentes
- Sistema visual que funcione em TODAS as páginas
- → visual-spec.md (unificado)

### GATE 2 — Aprovação copy + design system

### 4. Build multi-página
- Dev PHP: navegação entre páginas
- Header e footer compartilhados (includes)
- Cada página com seu conteúdo
- Formulário de contato funcional

### 5. QA por página + navegação
- Auditor testa CADA página individualmente
- Testa navegação entre TODAS as páginas
- Testa responsividade de TODAS as páginas
- → relatorio-qa.md

### GATE 3 — QA aprovado

### 6. Deploy

### GATE 4 — Aprovação final do operador
