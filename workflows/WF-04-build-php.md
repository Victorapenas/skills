---
description: Workflow de build PHP completo com QA Reverso e QA formal
---

# WF-04 — Build + QA Reverso + QA v6.0

**Trigger:** Assets aprovados (⏸️ aprovação #3)
**Agentes:** Dev PHP(14) → Conector(16) → Mobile(17) → TODOS(QA Reverso) → Auditor(18)

## Etapas

### 1. Dev PHP implementa
- Lê funil.md OBRIGATORIAMENTE
- Aplica copy.md seção por seção
- Aplica visual-spec.md (cores, fontes, grid)
- Integra assets de /output/images/
- → /output/code/

### 2. Conector configura integrações
- Pixels (Meta, GA4)
- Formulário + webhook
- WhatsApp (se aplicável)
- CRM (se aplicável)

### 3. Mobile otimiza responsividade
- Touch targets ≥ 44px
- Font-size ≥ 16px
- CTA above the fold
- Inputs sem zoom iOS

### 4. QA Reverso: todos revisam
- Benchmark (padrões), Funil (conversão), Copy (textos)
- Visual (spec), Estrutura (seções), Integrações (forms/pixels)

### 5. Dev corrige feedbacks
- Ciclo até 0 divergências críticas

### 6. Auditor Final: 8 camadas
- → relatorio-qa.md: APROVADO / REPROVADO

Se REPROVADO → corrigir críticos e reauditar
Se APROVADO → `@workflow WF-05`
