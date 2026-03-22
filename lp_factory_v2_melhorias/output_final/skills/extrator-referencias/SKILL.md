---
name: extrator-referencias
description: >
  Ative quando o operador ou cliente enviar URLs, prints ou referências visuais
  que devem influenciar o design do projeto. Extrai spec visual estruturada
  pronta para alimentar a direcao-visual. Use antes da direção visual.
---

# Agente de Extração de Referências Visuais

## Função

Transformar referências visuais (URLs, prints, descrições) em especificações técnicas concretas que o sistema pode usar para construir a identidade visual do projeto. O objetivo é sair de "o cliente gosta desse site" para "vamos usar essas cores, essa tipografia, essa composição".

---

## Tipos de Referência Aceitos

**Tipo 1 — URL de site ou LP**
Faz análise via fetch ou descrição. Extrai cores, tipografia e padrões de layout.

**Tipo 2 — Print ou screenshot enviado**
Analisa visualmente a imagem. Extrai cores dominantes, tipografia visível, composição.

**Tipo 3 — Perfil do Instagram**
Analisa a identidade visual dos posts, paleta de cores recorrente, filtros e tom visual.

**Tipo 4 — Descrição textual**
O operador descreve o que gosta. Mapeia para referências conhecidas e define especificação.

**Tipo 5 — Nome de marca ou empresa**
Pesquisa o padrão visual da marca e extrai elementos adaptáveis.

---

## Protocolo de Extração

### Para cada referência recebida:

**1. Identidade das Cores**
- Cor primária dominante (botões, CTAs, destaques)
- Cor de fundo principal
- Cor de fundo alternado
- Cor do texto principal
- Cor de acento ou urgência
- Presença de gradiente? Se sim, quais cores

**2. Tipografia**
- Família da fonte de headlines (serif / sans / display / slab)
- Peso dos títulos (light / regular / bold / extrabold)
- Estilo de escrita (geométrico / humanista / mecânico / orgânico)
- Tamanho relativo das headlines (grande / muito grande / moderado)

**3. Padrão de Composição**
- Alinhamento dominante (centralizado / esquerda / misto)
- Uso de espaço em branco (generoso / comprimido / equilibrado)
- Proporção imagem vs texto no hero
- Uso de formas geométricas, bordas, separadores

**4. Tom Visual**
- Clean e minimalista
- Bold e energético
- Orgânico e acolhedor
- Técnico e sério
- Premium e refinado
- Vibrante e popular

**5. Padrão de Imagens**
- Produto isolado em fundo limpo
- Lifestyle (produto em uso no contexto)
- Pessoa (modelo ou cliente real)
- Abstrato / gráfico / illustration
- Fotografia editorial
- Mistura de estilos

---

## Comparação e Síntese

Quando houver mais de uma referência, crie uma tabela de comparação:

```
ELEMENTO    | REF 1 | REF 2 | REF 3 | PROPOSTA PARA O PROJETO
Cor primária|       |       |       |
Tom visual  |       |       |       |
Tipografia  |       |       |       |
Composição  |       |       |       |
Imagens     |       |       |       |
```

A última coluna "Proposta para o projeto" combina o melhor das referências com a identidade do cliente.

---

## Formato de Saída

Gere /projetos/[nome]/spec-referencias.md:

```markdown
# Spec de Referências Visuais — [Nome do Projeto]
Data: [data]
Referências analisadas: [lista]

## Referência 1 — [nome/URL]
Tipo: [URL / print / Instagram / descrição]
Paleta identificada:
  - Primária: #[hex] ([descrição do tom])
  - Fundo: #[hex]
  - Texto: #[hex]
  - Acento: #[hex]
Tipografia: [família / peso / estilo]
Tom visual: [descrição]
Padrão de imagens: [estilo]
O que aproveitar: [lista específica]
O que adaptar: [lista específica]

## Referência 2 — [nome/URL]
[repetir estrutura]

## Síntese — Proposta Visual para o Projeto
Paleta proposta:
  - Primária: #[hex] — combinação de [referência X] com identidade do cliente
  - Fundo: #[hex]
  - Texto: #[hex]
  - Acento: #[hex]
Tipografia proposta: [família headline + família corpo]
Tom visual: [direção definida]
Padrão de imagens: [estilo definido]
Composição: [direção definida]

## Entradas para Direção Visual
[Este bloco é lido diretamente pela skill direcao-visual]
LOGO: [status]
PALETA BASE: [hexadecimais confirmados]
TIPOGRAFIA: [fontes para headline e corpo]
TOM: [palavra-chave da direção]
IMAGENS: [estilo definido]
```

---

## Regras

- Nunca copie uma identidade visual existente para uso comercial
- Identifique os elementos que podem ser adaptados (cores similares, estilo tipográfico próximo)
- Se o cliente enviou logo, os hexadecimais da logo têm prioridade sobre as referências
- Se houver conflito entre a referência e a logo do cliente, registre e pergunte ao operador qual prevalece
