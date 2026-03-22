---
description: Protocolo de launch - primeiras 48h após deploy
---

# WF-PL01 — Protocolo de Launch (primeiras 48h)

**Trigger:** Site publicado em produção
**Agente:** Otimizador Pós-Launch (20)

## Checklist 48h

### Funcionalidade
- [ ] Site carrega sem erros
- [ ] Formulário envia corretamente
- [ ] Lead aparece no banco de dados
- [ ] Página de obrigado funciona
- [ ] Links e navegação funcionais

### Tracking
- [ ] GA4 recebendo dados (Real-Time)
- [ ] Meta Pixel PageView (Pixel Helper)
- [ ] Meta Pixel Lead (na obrigado.php)
- [ ] UTMs sendo capturados
- [ ] Eventos configurados disparando

### Segurança
- [ ] SSL ativo (cadeado verde)
- [ ] HTTP redireciona para HTTPS
- [ ] .env inacessível

### Performance
- [ ] PageSpeed ≥ 80 mobile
- [ ] LCP < 2.5s
- [ ] Core Web Vitals OK

### Monitorar nas 48h
- Tráfego (sessões, usuários)
- Taxa de rejeição
- Erros 404 e 500
- Formulário: taxa de conversão
