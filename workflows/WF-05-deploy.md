---
description: Workflow de deploy em produção
---

# WF-05 — Deploy v6.0

**Trigger:** QA aprovado (relatorio-qa.md = APROVADO)
**Agentes:** Deploy (19) + Otimizador Pós-Launch (20)

## Etapas

### ⏸️ APROVAÇÃO HUMANA #4

### 1. Deploy publica
- Ambiente definido no briefing (Hostinger / VPS / cPanel / Railway)
- Seguir checklist do deploy skill

### 2. Teste pós-deploy
- Formulário testado com dado real
- Pixels verificados (Pixel Helper, GA4 DebugView)
- SSL ativo + redirect HTTP→HTTPS
- Funil completo testado ponta a ponta

### 3. Registro final
- URL final no registro.md
- Atualizar /_projetos.md com URL e status
- Status: PRODUÇÃO ATIVA ✅

### 4. Otimizador Pós-Launch inicia
- `@workflow WF-PL01` (protocolo de launch 48h)

### 5. Perguntar ao operador
- `@arquivar [nome]`?
