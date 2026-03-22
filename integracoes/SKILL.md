---
name: integracoes
description: >
  Configura integrações externas (Conector de Sistemas).
  Formulários, pixels, webhooks, CRM, automações.
  Ative após build PHP concluído.
---

# Integrações v6.0

## Função
Configurar todas as integrações externas: pixels de rastreamento,
webhooks, CRM, email, notificações, WhatsApp.

## ANTES DE EXECUTAR
1. Ler /evolution/integracoes.md (se existir)
2. Registrar início em monitor.md

## Pré-requisitos
- briefing.md (seções Tracking e Integrações)
- /output/code/ (build principal concluído)

---

## Checklist por Tipo de Integração

### FORMULÁRIO
- [ ] Action aponta para actions/salvar-lead.php
- [ ] Validação server-side (PHP)
- [ ] Validação client-side (JavaScript)
- [ ] Redirect para obrigado.php
- [ ] Anti-spam (rate limiting, honeypot)

### META PIXEL (Facebook)
- [ ] Código base no `<head>` de todas as páginas
- [ ] `fbq('track', 'PageView')` em todas as páginas
- [ ] `fbq('track', 'Lead')` na obrigado.php
- [ ] Pixel ID via .env (não hardcoded)

### GA4 (Google Analytics 4)
- [ ] Tag `gtag.js` no `<head>`
- [ ] Evento `page_view` automático
- [ ] Evento `generate_lead` na obrigado.php
- [ ] Measurement ID via .env

### GTM (Google Tag Manager)
- [ ] Container no `<head>` (script)
- [ ] Container no `<body>` (noscript)
- [ ] Triggers configurados (page load, form submit)

### WEBHOOK
- [ ] Endpoint definido
- [ ] Payload JSON estruturado
- [ ] Timeout configurado
- [ ] Retry em caso de falha (1x)

### CRM
- [ ] Mapeamento de campos (nome, email, telefone → campos CRM)
- [ ] API key via .env
- [ ] RD Station: POST /api/1.2/conversions
- [ ] ActiveCampaign: POST /api/3/contacts

### WHATSAPP
- [ ] URL com UTMs: `https://wa.me/55XXXXXXXXXXX?text=...`
- [ ] Mensagem pré-definida com dados do visitante
- [ ] Evento de tracking no clique

### EMAIL (Notificação)
- [ ] PHPMailer com SMTP
- [ ] Template HTML para notificação de novo lead
- [ ] Credenciais SMTP via .env

---

## Regra Fundamental
**Tracking de conversão NA PÁGINA DE DESTINO (obrigado.php)**
Nunca no formulário, sempre na página que confirma a ação.

## Saída
- Integrações implementadas no código
- /projetos/[nome]/output/integracoes-configuradas.md (checklist)
