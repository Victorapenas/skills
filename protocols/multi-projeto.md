# Protocolo Multi-Projeto v6.0

## Princípio
Cada projeto é isolado. Aprendizados (/evolution/) são globais.
Dados do projeto (/projetos/[nome]/) são locais.

## Estrutura

```
/_projetos.md              ← lista central de TODOS os projetos
/evolution/                ← aprendizados GLOBAIS (compartilhados)
/projetos/
    ├── _modelo/           ← template para novos projetos
    ├── projeto-a/         ← isolado
    └── projeto-b/         ← isolado
```

## Comandos

| Comando | Ação |
|---------|------|
| `@novo-projeto [nome]` | Cria pasta + registro.md + monitor.md + feedback-log.md |
| `@projeto [nome]` | Salva estado atual, troca contexto para o indicado |
| `@arquivar [nome]` | Marca como CONCLUÍDO com data e URL final |
| `@projetos` | Lista todos os projetos com status atual |
| `@usar-como-base [nome]` | Importa APENAS /evolution/, NÃO dados do projeto |

## Regras de Isolamento

1. **NUNCA** ler arquivos de outro projeto sem comando explícito
2. Se "faz igual ao X": ler como **REFERÊNCIA**, criar novos arquivos no projeto ativo
3. Aprendizados em /evolution/ são globais e se aplicam a todos os projetos
4. Dados em /projetos/[nome]/ são locais e pertencem exclusivamente àquele projeto

## Criação de Novo Projeto

Ao executar `@novo-projeto [nome]`:
1. Criar `/projetos/[nome]/`
2. Copiar templates de `/projetos/_modelo/`
3. Preencher registro.md com dados iniciais
4. Adicionar entrada em `/_projetos.md`
5. Definir como projeto ativo

## Arquivamento

Ao executar `@arquivar [nome]`:
1. Atualizar status para CONCLUÍDO em `/_projetos.md`
2. Registrar data de conclusão e URL final
3. Projeto continua acessível mas não é mais ativo
