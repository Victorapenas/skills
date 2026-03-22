---
description: Workflow de diagnóstico e otimização de site existente
---

# WF-08 — Diagnóstico + Otimização de Site Existente v6.0

**Trigger:** Operador solicita análise de site existente
**Agentes:** Auditor (18) + Otimizador (20) + agentes conforme necessidade

## Fases

### Fase 1 — DIAGNÓSTICO
- Auditor roda 8 camadas no site atual
- Gerar relatório com todos os problemas encontrados
- Classificar por severidade (🔴🟡🟢)

### Fase 2 — PRIORIZAÇÃO
- PIE Framework para cada item encontrado
- Score = (Potential + Importance + Ease) / 3
- Ordenar por score decrescente

### Fase 3 — IMPLEMENTAÇÃO
- Agentes corrigem por prioridade (maior score primeiro)
- Dev PHP: correções de código
- Copy: reescrita de textos
- Visual: ajustes de design
- Integrações: tracking e forms

### Fase 4 — VALIDAÇÃO
- A/B testing nos pontos críticos alterados
- Medir impacto de cada mudança
- Relatório de antes vs depois
