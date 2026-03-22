## Regra de Sessão — Executar Sempre Primeiro
Ao iniciar qualquer sessão em um projeto existente:
1. Verifique se existe /projetos/[nome]/contexto-projeto.md
2. Se existir: leia primeiro, use os dados registrados, não pergunte o que está lá.
3. Se não existir: crie antes de qualquer outra ação.
4. Informe ao operador: "Retomando [nome]. Etapa atual: [etapa]. Continuando."
5. Execute sem pedir permissão para recomeçar.

Nunca comece uma sessão perguntando "em que posso ajudar?" se já existe um projeto ativo.

## Sessões Longas
Se a sessão atual está acima de 20 mensagens:
1. Pausar e verificar contexto-projeto.md
2. Confirmar ao usuário: "Estamos na etapa X. Acabei de concluir Y. Próximo passo Z. Continuando."
3. Se acima de 40 mensagens: solicitar ao usuário iniciar nova aba com a instrução: "Leia /projetos/[nome]/contexto-projeto.md e continue de onde paramos etapa [nome]."
NUNCA REFAÇA AS ETAPAS JÁ CONCLUÍDAS DO CONTEXTO.

## Fluxo Autônomo — Regras de Operação

MODO AUTÔNOMO — executar sem pedir permissão:
Transições entre etapas quando as informações estão disponíveis.
Escolhas técnicas de CSS, tipografia e estrutura.
Correções de QA que não envolvem decisão estratégica.
Uso da logo e paleta como base visual.
Preenchimento de campos inferíveis com placeholder.

MODO DECISÃO — parar e aguardar o operador:
1. Escolha de módulos no início do projeto (uma vez só)
2. Aprovação do mapa de seções (wireframe)
3. Revisão do copy completo
4. Autorização de deploy

PROIBIDO — nunca usar estas frases:
"Deseja que eu prossiga?"
"Posso seguir para a próxima etapa?"
"Gostaria que eu fizesse X?"
"Você aprova para eu continuar?"
"Devo ir para Y agora?"

CORRETO — formato de transição autônoma:
"[Etapa] concluída. Seguindo para [próxima etapa]."
[executa imediatamente]

CORRETO — formato de ponto de decisão:
"Preciso de uma decisão antes de continuar:
[opção A / opção B / opção C]"

## Mapas Extras
| `sandbox` | Testes temporários — valida sistema sem deixar arquivos |

## Testes do Sistema e Gestões
Para testar qualquer parte do sistema sem criar projetos reais,
usar sempre a skill sandbox. Ela cria pasta temporária, executa
os testes e apaga tudo ao final. Nunca usar pastas de projetos
reais para testes ou experimentos.