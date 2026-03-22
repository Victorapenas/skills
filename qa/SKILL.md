---
name: qa
description: >
  Auditoria 8 camadas (Auditor Final). Só após QA Reverso.
  OBRIGATÓRIO antes de deploy. Gate final.
---

# QA v6.0

## Função
Auditoria completa em 8 camadas. Coordena QA Reverso com todos os agentes.
Falha crítica → REPROVADO → bloqueia deploy.

## ANTES DE EXECUTAR
1. Ler /evolution/qa.md (se existir)
2. Confirmar que QA Reverso foi executado
3. Registrar início em monitor.md

---

## QA REVERSO (antes do QA formal)

Todos os agentes relevantes revisam o build contra seus critérios:

| Agente | Valida |
|--------|--------|
| Benchmark (04) | Padrões do mercado aplicados? |
| Funil (07) | Conversão implementada conforme funil.md? |
| Copy (10) | Textos do copy.md aplicados corretamente? |
| Visual (11) | Visual-spec seguido? Cores, fontes, grid? |
| Estrutura (08) | Todas as seções do wireframe presentes? |
| Integrações (16) | Forms, pixels, webhooks funcionais? |

---

## 8 CAMADAS DE AUDITORIA

### Camada 1 — Segurança PHP
- [ ] Prepared statements em TODAS as queries
- [ ] Inputs sanitizados com filter_input()
- [ ] Output escapado com htmlspecialchars()
- [ ] CSRF implementado e validado (hash_equals)
- [ ] .htaccess configurado (HTTPS, headers, bloqueios)
- [ ] .env inacessível publicamente
- [ ] APP_DEBUG=false, display_errors=Off
- [ ] Headers de segurança presentes
- [ ] HTTPS forçado

### Camada 2 — Funcionalidade
- [ ] Formulário envia corretamente
- [ ] Dados chegam no banco de dados
- [ ] Página obrigado carrega após envio
- [ ] Token CSRF validado (rejeita sem token)
- [ ] Erros de validação exibidos ao usuário

### Camada 3 — Mobile/Responsivo
- [ ] Testado em 320px (iPhone SE)
- [ ] Testado em 375px (iPhone padrão)
- [ ] Testado em 768px (tablet)
- [ ] Testado em 1440px (desktop)
- [ ] Botões com min-height 44px (touch target)
- [ ] Textos legíveis sem zoom
- [ ] CTA visível sem scroll (above the fold)

### Camada 4 — SEO
- [ ] Title tag 50-60 caracteres
- [ ] Meta description 150-160 caracteres
- [ ] H1 único por página
- [ ] Hierarquia de headings correta (H1 > H2 > H3)
- [ ] Imagens com atributo alt
- [ ] Open Graph tags (og:title, og:description, og:image)
- [ ] robots.txt presente

### Camada 5 — Performance
- [ ] Imagens < 200kb cada (WebP ou JPG otimizado)
- [ ] CSS no `<head>` / JS antes do `</body>`
- [ ] Google Fonts com preconnect
- [ ] Sem JavaScript desnecessário
- [ ] Carregamento < 3s em simulação 4G
- [ ] PageSpeed ≥ 80 mobile

### Camada 6 — Tracking
- [ ] Meta Pixel: PageView em todas + Lead na obrigado.php
- [ ] GA4: pageview + generate_lead na conversão
- [ ] UTMs capturados e salvos no banco
- [ ] Nenhuma chave de API exposta no código fonte

### Camada 7 — Conteúdo
- [ ] Copy confere com copy.md (comparar seção por seção)
- [ ] Zero Lorem Ipsum no código final
- [ ] Zero [PENDENTE] no código final
- [ ] Informações de contato corretas

### Camada 8 — Funil
- [ ] Implementado conforme funil.md
- [ ] Fluxo ponta a ponta testado (visitante → ação → destino)
- [ ] Página de obrigado funcional (se aplicável)
- [ ] WhatsApp redireciona corretamente (se aplicável)

---

## Severidade

| Severidade | Símbolo | Exemplos | Ação |
|------------|---------|----------|------|
| CRÍTICO | 🔴 | Form sem CSRF, SQL injection, .env exposto, HTTPS off, layout quebrado mobile, tracking ausente | Bloqueia deploy |
| MÉDIO | 🟡 | Imagens sem alt, title ausente, imagens pesadas | Corrigir antes de deploy |
| LEVE | 🟢 | OG incompleto, microcopy genérico | Backlog |

---

## Resultado

| Status | Condição |
|--------|----------|
| **APROVADO** | 0 críticos, 0 médios |
| **APROVADO COM AJUSTES** | 0 críticos, 1-3 médios (com prazo) |
| **REPROVADO** | 1+ crítico |

**GATE: Deploy SÓ com APROVADO ou APROVADO COM AJUSTES**

## Saída: /projetos/[nome]/relatorio-qa.md
