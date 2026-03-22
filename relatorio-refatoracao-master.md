# Master Prompt — PHP Landing Page Factory V2 
> *(Auditoria Etapa 5 — Concluída em Março de 2026)*

## Checklist de 17 Itens Verificados
1.  ✅ **Contexto centralizado ativado:** Criado `/projetos/_modelo/contexto-projeto.md` como âncora antes de iniciar projetos.
2.  ✅ **Orquestrador sem loop:** Adicionado envio de Formulário Único no primeiro passe. Transição direta acoplada no `GEMINI.md`.
3.  ✅ **Prevenção de Amolação (Múltiplos "Posso continuar?"):** Vetados radicalmente através da listagem explícita de Frases Proibidas no `GEMINI.md`.
4.  ✅ **Skills modulares:** `gerador-imagem` partido em 3 para redução de peso; `construtor-php` perdeu logica de PDO/HTaccess pura para o `modulo-seguranca`.
5.  ✅ **Detector de IA Copy:** Travamento rígido para IA no `QA` ("Embarque nessa jornada", "No mundo atual") + Alerta em `copy`.
6.  ✅ **Modo Produto/Variação:** Implantadas até 3 variações estáticas sem bugar o loop, questionado logo no input do orquestrador.
7.  ✅ **QA com Auto-Correção:** Problemas Média complexidade viraram autocorreção autônoma (ALT Tags, Title, H1 duplos).
8.  ✅ **Analisador Cego de LP:** Skill `analisador-lp` operante bloqueando scroll completo a favor de varredura por seções (Hero > Middle > Footer).
9.  ✅ **Extrator de UI/UX:** `extrator-referencias` isola Hexadecimais e Fontes. Encaixado na pipeline de Briefing.
10. ✅ **Sanidade Mobile:** Nova rule set `refinamento-mobile` força clamps CSS, inputs sem zoom 16px iOS e botões hit-box (min 44/52px).
11. ✅ **Otimização de LCP (Weight):** Imagens restritas a <200kb. Classificado como Erro Crítico de Deploy (Bloqueio).
12. ✅ **Trava de Variável .ENV:** Deploy bloqueado se as tags META_PIXEL_ID e GA4_ID não forem devidamente povoadas após request no Briefing de tracking.
13. ✅ **Injeção Residual das Skills (.py script):** Garantia de rodapé em todas as SKILLS ativas sobre atulização de `contexto-projeto.md` foi fixada com script python local.
14. ✅ **Decisão de PHP/Laravel Lógica:** Orquestrador possui rule mapping 1-3 pages = Vanilla vs +3 pages auth = Laravel.
15. ✅ **Prevenção 40 mensagens +:** Rotina de salvamento state tracker criada acima do mark de 20 / 40 prompts em `GEMINI.md`.
16. ✅ **Remoção de SQL Injection:** Construtor PDO preparado para usar PDO bindings, bloqueando concatenation no PHP em `modulo-seguranca`.
17. ✅ **Deploy Seguro Integrado:** Bloqueador impenetrável sem o aval de `QA == APROVADO` explícito.

---
### Status da Operação Total
> O Refactoring solicitado via Master Prompt foi aplicado a todos os NÓS de arquitetura dos Agentes. A Fábrica de Landing Pages está rodando a V2 com Fluxo Autônomo para CSS/Decisões e travas rígidas de Segurança.
