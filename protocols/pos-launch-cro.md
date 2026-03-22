# Protocolo de Otimização Contínua Pós-Launch v6.0

## Ciclo CRO
```
Medir → Analisar → Hipótese → Testar → Validar → Implementar → (repetir)
```

## Stack por Nível

### Nível 1 — Essencial (todo projeto)
- **GA4**: tráfego, conversões, eventos, funis
- **Search Console**: indexação, keywords, erros de rastreamento
- **Clarity** (Microsoft): heatmaps gratuitos, gravações de sessão

### Nível 2 — Avançado (projetos com budget)
- **Hotjar**: heatmaps premium, pesquisas in-page, gravações
- **Looker Studio**: dashboards customizados com dados GA4

### Nível 3 — Especializado (e-commerce, alto volume)
- **VWO**: testes A/B avançados com segmentação
- **Optimizely**: experimentação em escala
- **Semrush**: SEO competitivo + auditoria técnica

## Framework PIE (Priorização de Otimizações)

| Dimensão | Escala | Pergunta |
|----------|--------|----------|
| Potential | 1-10 | Quão grande é a melhoria potencial? |
| Importance | 1-10 | Quão valioso é o tráfego desta página? |
| Ease | 1-10 | Quão fácil é implementar esta mudança? |
| **Score** | Média | (P + I + E) / 3 |

Priorizar otimizações pelo score PIE — do maior para o menor.

## Framework Hipótese A/B (5 Passos)

1. **Observação** — Dado concreto (ex: "70% dos usuários abandonam no formulário")
2. **Hipótese** — "Se reduzirmos os campos do formulário de 5 para 3, então a taxa de conversão aumentará em 15%"
3. **Métrica** — KPI primário: taxa de conversão do formulário
4. **Implementação** — Variante A (original) vs Variante B (3 campos)
5. **Análise** — Significância estatística > 95%, mínimo 2 semanas de dados

## Core Web Vitals (Metas)

| Métrica | Meta | Crítico |
|---------|------|---------|
| LCP (Largest Contentful Paint) | < 2.5s | > 4.0s |
| CLS (Cumulative Layout Shift) | < 0.1 | > 0.25 |
| INP (Interaction to Next Paint) | < 200ms | > 500ms |

## Workflows de Monitoramento

| Workflow | Frequência | Foco |
|----------|------------|------|
| WF-PL01 | Primeiras 48h | Validar que tudo funciona |
| WF-PL02 | Semanal | Métricas básicas, alertas |
| WF-PL03 | Quinzenal | Heatmaps, comportamento |
| WF-PL04 | Mensal | CRO, testes A/B |
| WF-PL05 | Trimestral | Auditoria completa |

## Alertas Automáticos

Disparar alerta ao operador quando:
- Taxa de rejeição subir > 20% em relação à semana anterior
- Conversões caírem > 15% sem explicação
- Core Web Vitals degradarem para "Precisa Melhorar"
- Erros 404/500 aparecerem no Search Console
- Tráfego orgânico cair > 30% mês a mês
