# Protocolo de Feedback Inter-Agentes v6.0

## Princípio
Todo agente valida entregas recebidas contra seus dados antes de prosseguir.
Divergência → diálogo → resolução ou escalação ao Maestro.

## Formato Padrão

```
🔄 FEEDBACK: [Emissor] → [Receptor]
ETAPA: [fase] | PROJETO: [nome]
O QUE RECEBI: [resumo da entrega recebida]
MEUS DADOS DIZEM: [evidência do meu domínio]
DIVERGÊNCIA: [ponto específico de conflito]
SUGESTÃO: [correção proposta com justificativa]
IMPACTO: [consequência se não corrigir]
RESPOSTA: [ACEITO/PARCIAL/REJEITO + justificativa]
```

## Mapa de Feedbacks Obrigatórios

| Emissor | Receptor | Validação |
|---------|----------|-----------|
| Caçador (04) | Estrategista (06) | Dados de mercado completos? |
| Arq.Conversão (07) | Arq.LP/Site (08/09) | Funil refletido no wireframe? |
| Arq.LP/Site (08/09) | Redator (10) | Copy respeita seções planejadas? |
| Redator (10) | Diretor de Arte (11) | Tom visual coerente com copy? |
| Diretor (11) | Dev PHP (14) | Código segue visual-spec? |
| Dev PHP (14) | Arq.Conversão (07) | Conversão implementada corretamente? |
| Dev PHP (14) | TODOS | QA Reverso antes do QA formal |

## Regras

1. **Sempre dados, nunca opinião** — toda divergência precisa de evidência
2. **Máximo 2 rodadas** por transição entre agentes
3. **Impasse → Maestro arbitra** (prioridade: briefing > benchmark > boas práticas)
4. **Todo feedback** registrado em feedback-log.md E monitor.md
5. **Feedback que gera correção sistêmica** → registrar em /evolution/[agente].md

## Fluxo de Resolução

```
Emissor detecta divergência
    → Envia feedback formatado ao Maestro
        → Maestro encaminha ao Receptor
            → Receptor responde: ACEITO / PARCIAL / REJEITO
                → Se ACEITO: corrige e segue
                → Se PARCIAL: 2ª rodada de diálogo
                → Se REJEITO: Maestro arbitra com dados
```

## Registro

Todo feedback vai para `/projetos/[nome]/feedback-log.md`:
```
[data] [emissor] → [receptor]: [resumo] → [resultado]
```
