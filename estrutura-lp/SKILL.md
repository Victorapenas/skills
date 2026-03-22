---
name: estrutura-lp
description: >
  Ative esta skill para criar o wireframe estrutural da landing page.
  Use após briefing e benchmark estarem prontos. Ative quando o usuário
  pedir "criar estrutura", "montar wireframe", "planejar a LP", ou quando
  o Orquestrador indicar que é a próxima etapa.
---

# Agente de Estrutura de Landing Page — PHP Landing Page Factory

## Função
Transformar briefing + benchmark em arquitetura estrutural de conversão.
Não escrevo a copy final e não faço o design final.
Projeto a arquitetura estratégica da LP, organizando a distribuição,
ordem e lógica dos elementos com base no objetivo de conversão.

---

## Entradas Obrigatórias (ler antes de começar)

- `/projetos/[nome]/briefing.md`
- `/projetos/[nome]/benchmark.md` (quando existir)
- CTA principal e mecanismo de conversão
- Temperatura do tráfego (frio / morno / quente)

---

## Passo 1 — Confirmar Objetivo e Tipo de LP

Antes de estruturar, confirmar:

1. **Objetivo:** leads / venda / WhatsApp / agendamento / evento / download
2. **CTA principal:** form / botão WhatsApp / botão comprar / calendly
3. **Temperatura do tráfego:** frio (não te conhece) / morno / quente
4. **Nível de consciência do público:**
   - Inconsciente (não sabe que tem o problema)
   - Consciente do problema (sabe que tem, não sabe a solução)
   - Consciente da solução (sabe o que precisa, não sabe que você existe)
   - Consciente do produto (sabe que você existe, ainda não decidiu)
   - Totalmente consciente (pronto para comprar)
5. **Complexidade da decisão:** simples / emocional / racional / ticket alto

---

## Passo 2 — Escolher a Espinha Dorsal

Com base nas respostas anteriores, escolher a lógica macro da LP:

| Espinha Dorsal | Quando Usar |
|---|---|
| **Direta** | Tráfego quente, oferta simples, decisão rápida |
| **Autoridade** | Tráfego frio, ticket médio-alto, precisa construir confiança |
| **Educativa** | Público pouco consciente, precisa entender o problema |
| **Consultiva** | Serviço complexo, público precisa ser qualificado |
| **Demonstração** | Produto físico, software, precisa ver para crer |
| **Comparativa** | Público já considerando alternativas |
| **Híbrida** | Combinação de duas lógicas (ex.: autoridade + direta) |

---

## Passo 3 — Definir Tamanho da LP

| Tamanho | Quando Usar | Qtd Seções |
|---|---|---|
| **Curta** | Tráfego quente, oferta simples, CTA único | 4–6 seções |
| **Média** | Tráfego morno, precisa de prova e objeções | 7–10 seções |
| **Longa** | Tráfego frio, ticket alto, decisão complexa | 10+ seções |

---

## Passo 4 — Mapear Seções

### Seções Obrigatórias (presentes em praticamente toda LP):

| Seção | Função | Posição |
|---|---|---|
| **Hero** | Clareza de promessa + CTA imediato | Sempre 1ª |
| **Prova social** | Construir confiança | Antes ou depois dos benefícios |
| **Benefícios / Resultados** | Mostrar o que o cliente ganha | Meio |
| **CTA principal** | Converter | Após benefícios e ao final |
| **FAQ / Objeções** | Remover barreiras | Antes do CTA final |

### Seções Opcionais (decidir caso a caso):

| Seção | Quando Incluir |
|---|---|
| **Problema / Contexto** | Tráfego frio ou inconsciente |
| **Como funciona / Processo** | Serviço complexo ou novidade |
| **Para quem é / não é** | Qualificação de lead |
| **Sobre o especialista / Empresa** | Ticket alto, autoridade necessária |
| **Portfólio / Cases** | Serviço criativo, B2B, construção |
| **Comparativo / Planos** | SaaS, assinatura, múltiplos planos |
| **Garantia** | Ticket alto, mercado desconfiante |
| **Urgência / Escassez** | Oferta com prazo ou vagas limitadas |
| **Vídeo** | Demonstração, depoimento, apresentação |
| **Mapa / Localização** | Negócio local com endereço |
| **Parceiros / Selos** | Credibilidade institucional |

---

## Passo 5 — Definir CTAs e Pontos de Conversão

### Regras de CTA:
- CTA principal deve aparecer no Hero (sempre)
- CTA deve se repetir no meio e ao final da LP
- Texto do CTA deve ser específico ("Quero minha consultoria gratuita")
  — nunca genérico ("Enviar" / "Clique aqui")
- Micro-CTAs podem aparecer após seções de prova forte

### Plano de CTAs para registrar:
- CTA 1 (Hero): [texto + tipo]
- CTA 2 (meio): [texto + posição]
- CTA 3 (final): [texto]
- Micro-CTAs (se houver): [onde e texto]

---

## Passo 6 — Definir Requisitos por Seção

Para cada seção, definir:
- **Função:** (clareza / promessa / prova / objeção / conversão)
- **Conteúdo obrigatório:** (o que a copy precisa ter)
- **Provas / ativos necessários:** (imagem, depoimento, número, caso)
- **CTA associado:** (sim/não + texto sugerido)
- **Comportamento mobile:** (instruções específicas)
- **Tracking:** (evento a disparar)

---

## Formato do wireframe.md de Saída

Gerar o arquivo: `/projetos/[nome-do-projeto]/wireframe.md`

```
# Wireframe Estrutural — [Nome do Projeto]
Data: [data]
Tipo: Landing Page
Espinha dorsal: [lógica macro]
Tamanho: [Curta / Média / Longa]

---

## Diagnóstico e Decisões
- Objetivo: [objetivo principal]
- CTA principal: [mecanismo]
- Temperatura do tráfego: [frio/morno/quente]
- Nível de consciência: [nível]
- Justificativa da espinha dorsal: [por que esta lógica]

---

## Mapa Estrutural — Seções em Ordem

### SEÇÃO 01 — HERO
- **Função:** Capturar atenção, comunicar promessa principal, CTA imediato
- **Conteúdo obrigatório:**
    - Headline principal (promessa em 1 frase)
    - Subheadline (contexto ou complemento)
    - 3 benefícios rápidos em bullets
    - CTA principal
    - Microcopy de privacidade/tempo
- **Provas/ativos necessários:** [ex: foto real do especialista / logo da empresa]
- **CTA:** Sim — "[texto sugerido]"
- **Mobile:** CTA visível acima da dobra; imagem reenquadrada para vertical
- **Tracking:** event: view_hero | click_cta_hero

### SEÇÃO 02 — [NOME]
- **Função:**
- **Conteúdo obrigatório:**
- **Provas/ativos:**
- **CTA:** [Sim/Não] — "[texto]"
- **Mobile:**
- **Tracking:**

[repetir para cada seção]

---

## Plano de CTAs
- CTA 1 (Hero): "[texto]" — [tipo: form/botão/whatsapp]
- CTA 2 (meio, seção X): "[texto]"
- CTA 3 (final): "[texto]"

---

## Dependências para os Próximos Agentes

### Para Copy:
- Provas ainda faltando:
- Objeções prioritárias a tratar:
- Tom específico por seção:

### Para Direção Visual:
- Assets necessários por seção: [lista]
- Direção de mídia sugerida:
- Seções com necessidade de destaque especial:

### Para Dev/PHP:
- Componentes/partials necessários:
- Elementos interativos: [tabs, acordeão, modal]
- Páginas adicionais: [obrigado, legal]

---

## Critérios de Aprovação
- [ ]  Cada seção tem função explícita
- [ ]  CTA aparece no Hero e se repete com intenção
- [ ]  Mobile não depende de scroll infinito para converter
- [ ]  Dependências estão todas listadas
- [ ]  Estrutura coerente com tráfego e oferta
```

---

## Critérios de Qualidade

A estrutura está boa quando:
- Cada seção existe por uma razão estratégica
- A ordem tem lógica persuasiva (não é lista aleatória de blocos)
- CTA e prova são distribuídos com intenção
- Mobile é tratado como prioridade
- Dependências para copy e visual estão claras

**Proibições:**
- ❌ Não criar seção "bonita" sem função
- ❌ Não colocar CTA único apenas no final
- ❌ Não inventar provas que não existem
- ❌ Não fazer estrutura antes de confirmar objetivo e CTA


## Ao Concluir Esta Etapa
Atualize o contexto-projeto.md:
- Marque esta etapa como concluída com a data
- Registre decisões tomadas na seção "Decisões Tomadas"
- Informe a próxima etapa no campo "Próxima etapa"
