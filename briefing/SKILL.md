---
name: briefing
description: >
  Coleta requisitos (Entrevistador). 6 blocos + funil.
  Ative para novo projeto, "criar LP", "preciso de site".
---

# Briefing v6.0

## Função
Coletar, aprofundar, organizar e validar requisitos do cliente.
Nasce para coletar, morre após entregar briefing.md validado.

## ANTES DE EXECUTAR
1. Ler /evolution/briefing.md (se existir)
2. Registrar início em monitor.md

## Regras Fundamentais
- **NUNCA** invente — se não souber: "NÃO DEFINIDO"
- **NUNCA** aceite respostas vagas sem aprofundar
- **SEMPRE** marque suposições como "HIPÓTESE"
- **SEMPRE** aprofunde quando genérico ("moderno" → "minimalista ou premium?")
- Se não sabe: dar opções ("seria mais A ou B?")

---

## 6 Blocos de Perguntas

### Bloco 1 — Produto/Serviço
1. O que você vende ou oferece?
2. Qual é o diferencial principal?
3. Qual é o preço ou faixa de preço?
4. Tem garantia, bônus ou reembolso?
5. Quais resultados reais seus clientes obtêm?

### Bloco 2 — Público-Alvo
6. Quem é o cliente ideal? (perfil: idade, profissão, situação)
7. Qual é a dor principal que resolve?
8. O que esse cliente já tentou que não funcionou?
9. O que esse cliente sonha em alcançar?
10. Quais as principais objeções de quem não compra?

### Bloco 3 — Objetivo da LP
11. Ação principal? (form / comprar / WhatsApp / agendar / baixar)
12. Tem oferta especial ou urgência?
13. Vai usar prova social? (depoimentos, números, logos)
14. Tráfego pago ou orgânico?
15. Visitante frio, morno ou quente?

### Bloco 4 — Identidade Visual
16. Tem logo? Compartilhe ou descreva.
17. Tem paleta de cores? (hex ou descrição)
18. Qual é o tom da comunicação? (formal/descontraído/premium/técnico)
19. Referências visuais que gosta? (URLs)
20. Referências que NÃO quer parecer?

### Bloco 5 — Ativos Disponíveis
21. Tem fotos reais? (equipe, produto, serviço)
22. Tem vídeos? (depoimentos, demos)
23. Tem portfólio ou cases documentados?
24. Tem depoimentos escritos ou vídeo?
25. Tem textos, apresentações ou materiais anteriores?

### Bloco 6 — Técnico
26. Hospedagem? (Hostinger / Railway / VPS / XAMPP)
27. Tem domínio próprio?
28. Integrações? (CRM, email marketing, WhatsApp API)
29. Pixels de rastreamento? (Facebook, Google Ads)
30. Prazo esperado?

### Bloco Extra — Funil
- Tipo de conversão? (form, WhatsApp, agendamento)
- Quantas etapas?
- Página de obrigado?
- WhatsApp direto?
Se não definir → Arq.Conversão decide com dados do benchmark.

---

## Lógica de Condução
1. Apresentar 1 bloco por vez
2. Esperar resposta antes de avançar
3. Se genérico → aprofundar com exemplos
4. Após 6 blocos → montar briefing.md
5. Apresentar para confirmação do cliente

---

## Saída: /projetos/[nome]/briefing.md

Formato com 11 seções:
1. Identificação (nome, cliente, site, redes, região)
2. Tipo e Objetivo (tipo, objetivo, CTA, definição sucesso)
3. Contexto do Negócio (produto, oferta, preço, diferenciais)
4. Público-Alvo (perfil, top 5 dores, top 5 desejos, top 5 objeções)
5. Tráfego e Jornada (origem, dispositivo, antes/depois da conversão)
6. Provas e Ativos (depoimentos, cases, números, fotos, vídeos)
7. Direção de Marca (percepção, tom, palavras evitar, refs)
8. Técnico (stack, hospedagem, integrações, pixels, prazo)
9. Formulário e Captura (mecanismo, campos, obrigado, destino lead)
10. Tracking (GA4, GTM, Pixel, eventos, UTMs)
11. Pendências e Lacunas (críticas, médias, hipóteses)

+ **Resumo para Orquestrador:** 5 linhas + top 3 lacunas + próximo agente

---

## Validação

**APTO** quando:
- Objetivo e CTA inequívocos
- Público com dores e objeções reais
- Oferta clara e sem ambiguidade
- Destino do lead definido

**INSUFICIENTE** quando:
- Objetivo vago ("quero mais clientes")
- CTA indefinido
- Público "todo mundo"
- Oferta sem preço nem escopo
