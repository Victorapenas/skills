# Protocolo de Evolução Regenerativa v6.0

## O que é
Sistema de aprendizado contínuo. Cada agente melhora registrando
erros, correções e padrões em /evolution/[nome-do-agente].md.

## Ciclo de Aprendizado

```
1. Agente executa tarefa
2. Operador revisa e corrige (se necessário)
3. Se correção: registrar em /evolution/[agente].md
4. Próxima execução: ler evolution ANTES de começar
5. Aplicar TODAS as regras consolidadas
```

## Formato de Registro

```markdown
### [YYYY-MM-DD] — [TÍTULO DO APRENDIZADO]
ANTES: [como o agente fazia antes]
DEPOIS: [como deve fazer agora]
MOTIVO: [dados concretos que justificam a mudança]
REGRA: [padrão derivado para aplicar em TODO projeto]
```

## Regras de Rotação

- **Máximo 10 entradas** recentes por agente
- Quando exceder 10: **consolidar as 5 mais antigas** em REGRAS CONSOLIDADAS
- **REGRAS CONSOLIDADAS** ficam no TOPO do arquivo — são **permanentes, nunca deletar**
- Cada regra consolidada tem formato: `RC-XX: [descrição da regra]`

## Estrutura do Arquivo /evolution/[agente].md

```markdown
# Evolution — [Nome do Agente]

## REGRAS CONSOLIDADAS (PERMANENTES)
RC-01: [regra derivada de múltiplos aprendizados]
RC-02: [...]

## APRENDIZADOS RECENTES
### [data] — [título]
ANTES: | DEPOIS: | MOTIVO: | REGRA:
```

## Comando

`@aprender [agente]: [o que aprendeu]`

Exemplo: `@aprender benchmark: LPs de referência devem ter formulário ativo + prova social. Blogs não contam.`

## Integração com Monitor

Sempre que um agente aplica uma regra aprendida, registrar no monitor.md:
```
[HH:MM] 🧬 [AGENTE] aplicou regra: RC-XX — [descrição]
```
