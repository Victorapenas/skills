# Protocolo de Monitor de Fluxo v6.0

## Princípio
Visualizar o organismo vivo. Cada ação de agente é registrada em
`/projetos/[nome]/monitor.md` para rastreabilidade total.

## O que Registrar

### Início de Ação
```
[HH:MM] [EMOJI] [AGENTE] → [Ação iniciada]...
```

### Fim de Ação
```
[HH:MM] [EMOJI] [AGENTE] → ✅ [Output/resultado]
```

### Feedback
```
[HH:MM] 🔄 [Emissor] → [Receptor]: "[Resumo]" → [ACEITO/PARCIAL/REJEITO]
```

### Aprovação Humana
```
[HH:MM] ⏸️ APROVAÇÃO HUMANA #[N] — [aguardando/aprovado/recusado]
```

### Aprendizado Aplicado
```
[HH:MM] 🧬 [AGENTE] aplicou regra: [RC-XX — descrição]
```

### Erro
```
[HH:MM] ❌ [AGENTE] → [Descrição do problema]
```

## Emojis Fixos por Agente

| Emoji | Agente | Número |
|-------|--------|--------|
| 📥 | Entrevistador | 01 |
| 📎 | Receptor de Ativos | 02 |
| 🔎 | Leitor de Marca | 03 |
| 🔍 | Caçador de Referências | 04 |
| 🕵️ | Espião de Concorrência | 05 |
| 📊 | Estrategista | 06 |
| 🎯 | Arq. Conversão | 07 |
| 📐 | Arq. LP | 08 |
| 🏗️ | Arq. Site | 09 |
| ✍️ | Redator | 10 |
| 🎨 | Diretor de Arte | 11 |
| 🖼️ | Criador de Assets | 12 |
| 🎬 | Animação | 13 |
| ⚙️ | Dev PHP | 14 |
| ⚡ | Dev Vercel | 15 |
| 🔗 | Conector | 16 |
| 📱 | Mobile | 17 |
| ✅ | QA | 18 |
| 🚀 | Deploy | 19 |
| 📈 | Otimizador | 20 |

## Exemplo de Monitor Real

```
═══ FLUXO DE AGENTES ═══
[10:00] 📥 ENTREVISTADOR → Iniciando coleta de briefing (6 blocos)...
[10:15] 📥 ENTREVISTADOR → ✅ briefing.md criado — Status: APTO
[10:15] ⏸️ APROVAÇÃO HUMANA #1 — aguardando
[10:20] ⏸️ APROVAÇÃO HUMANA #1 — ✅ aprovado
[10:20] 🔍 CAÇADOR → Pesquisando top 10 LPs do nicho...
[10:20] 🕵️ ESPIÃO → Analisando concorrentes (paralelo)...
[10:35] 🔍 CAÇADOR → ✅ benchmark.md criado (8 LPs analisadas)
[10:35] 🕵️ ESPIÃO → ✅ Relatório integrado ao benchmark
[10:36] 🧬 CAÇADOR aplicou regra: RC-01 — Descartar LPs sem form ativo
```
