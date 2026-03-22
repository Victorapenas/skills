---
name: funil
description: >
  Analisa funis de conversão (Arq.Conversão). Mapeia e recomenda.
  Ative após benchmark, antes de estrutura-lp.
---

# Funil v6.0

## Função
Mapear funis das LPs de referência, classificar padrões e
recomendar arquitetura de conversão para o projeto.

## ANTES DE EXECUTAR
1. Ler /evolution/funil.md (se existir)
2. Registrar início em monitor.md

## Pré-requisitos
- /projetos/[nome]/briefing.md (aprovado)
- /projetos/[nome]/benchmark.md (completo)

---

## Processo

### 1. Mapear Funis das LPs do Benchmark
Para cada LP analisada, identificar:
- Tipo de conversão
- CTA principal
- Tem página de obrigado?
- Formulário inline ou modal?
- Quantas etapas até a conversão?

### 2. Classificar Padrão Dominante
Qual tipo de funil aparece em 70%+ das LPs do nicho?

### 3. Tipos de Funil

| Tipo | Descrição | Quando usar |
|------|-----------|-------------|
| Captura | Form → obrigado.php | Lead gen padrão |
| WhatsApp | Botão → WhatsApp com UTMs | Serviços, consulta |
| Agendamento | Calendly/embed → confirmação | Profissionais liberais |
| Checkout | Botão → página de pagamento | Produto digital |
| Híbrido | Form + WhatsApp (opções) | Quando público varia |
| Multi-step | Etapa 1 → Etapa 2 → obrigado | Qualificação de lead |

### 4. Cruzar com Briefing
- Objetivo definido no briefing → tipo de funil compatível
- Temperatura do tráfego → complexidade do funil
- Ativos disponíveis → viabilidade técnica

### 5. Recomendar com Justificativa
```
FUNIL RECOMENDADO: [tipo]
JUSTIFICATIVA: [por que este tipo, baseado em dados]
PÁGINAS: [index.php, obrigado.php, ...]
CTAs: [texto + posição na LP]
ALERTAS: [riscos ou dependências]
```

---

## Saída: /projetos/[nome]/funil.md

Formato:
```markdown
# Análise de Funil — [Nome do Projeto]

## Mapa de Funis do Mercado
| LP | Tipo | CTA | Obrigado? | Inline? | Etapas |

## Padrão Dominante
[qual tipo aparece mais e por quê]

## Funil Recomendado
- Tipo: [tipo]
- Páginas: [lista]
- CTAs: [posição + texto]
- Fluxo: [visitante → ação → destino]

## Justificativa
[dados do benchmark + briefing]

## Alertas
[dependências, riscos, itens pendentes]
```
