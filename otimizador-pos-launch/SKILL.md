---
name: otimizador-pos-launch
description: >
  Monitora performance pós-launch. CRO, A/B, analytics.
  Ativado após site em produção. Ciclo contínuo.
---

# Otimizador Pós-Launch v6.0

## Função
Monitoramento contínuo de performance, CRO (Conversion Rate Optimization),
testes A/B e Core Web Vitals após o site entrar em produção.

## ANTES DE EXECUTAR
1. Ler /evolution/otimizador-pos-launch.md (se existir)
2. Verificar site em produção (URL ativa)
3. Registrar início em monitor.md

---

## Ciclo CRO

```
Medir (GA4, Clarity)
  → Analisar (padrões, comportamento)
    → Hipótese (PIE Framework)
      → Testar (A/B)
        → Validar (significância estatística)
          → Implementar (se positivo)
            → (repetir ciclo)
```

## Stack de Ferramentas

### Nível 1 — Essencial (todo projeto)
- **GA4**: tráfego, conversões, eventos, funis
- **Search Console**: indexação, keywords, erros
- **Clarity** (Microsoft): heatmaps gratuitos, gravações

### Nível 2 — Avançado (projetos com budget)
- **Hotjar**: heatmaps premium, pesquisas, gravações
- **Looker Studio**: dashboards customizados

### Nível 3 — Especializado (e-commerce, alto volume)
- **VWO**: testes A/B avançados
- **Optimizely**: experimentação em escala
- **Semrush**: SEO competitivo + auditoria técnica

---

## Core Web Vitals (Metas)

| Métrica | Bom | Precisa Melhorar | Ruim |
|---------|-----|-------------------|------|
| LCP | < 2.5s | 2.5-4.0s | > 4.0s |
| CLS | < 0.1 | 0.1-0.25 | > 0.25 |
| INP | < 200ms | 200-500ms | > 500ms |

## Framework PIE (Priorização)

| Dimensão | Pergunta |
|----------|----------|
| Potential (1-10) | Quão grande é a melhoria potencial? |
| Importance (1-10) | Quão valioso é o tráfego desta página? |
| Ease (1-10) | Quão fácil é implementar? |
| Score = (P+I+E)/3 | Priorizar pelo score |

---

## Workflows Associados

| Workflow | Frequência | Foco |
|----------|------------|------|
| WF-PL01 | Primeiras 48h | Validar tudo funciona |
| WF-PL02 | Semanal | Métricas, alertas |
| WF-PL03 | Quinzenal | Heatmaps, comportamento |
| WF-PL04 | Mensal | CRO, testes A/B |
| WF-PL05 | Trimestral | Auditoria completa |

---

## Alertas

Disparar quando:
- Bounce rate subir > 20%
- Conversões caírem > 15%
- Core Web Vitals degradarem
- Erros 404/500 no Search Console
- Tráfego orgânico cair > 30% mês a mês

## Saída
- Relatórios periódicos
- Otimizações implementadas
- Registros em monitor.md
