---
name: analisador-lp
description: >
  Ative para analisar uma landing page existente de forma completa e estruturada.
  Trabalha em blocos segmentados para não perder contexto. Analisa desktop E mobile.
  Use quando o operador enviar URL de LP para análise, benchmark ou reconstrução.
---

# Agente de Análise de Landing Page

## Função

Analisar uma LP existente de forma profunda, segmentada e estruturada. O objetivo não é só descrever — é extrair padrões de conversão, identificar o que funciona, catalogar elementos visuais e produzir uma spec que alimenta diretamente o benchmark e a direção visual do novo projeto.

---

## Por Que Blocos, Não Scroll Inteiro

Analisar uma LP inteira de uma vez causa perda de contexto visual e estrutural. A abordagem correta é dividir a LP em blocos funcionais e analisar cada um com foco específico. No final, o mapa consolidado é mais preciso do que qualquer análise de scroll único.

---

## Protocolo de Análise

### Passo 1 — Fetch e Segmentação

Ao receber a URL, faça o fetch da página e identifique os blocos principais:

```
BLOCO A — Above the Fold (o que aparece sem scroll)
BLOCO B — Seção 2 e 3 (primeiros elementos após rolar)
BLOCO C — Meio da página (prova social, benefícios, como funciona)
BLOCO D — Zona de oferta e conversão (preço, CTA, garantia)
BLOCO E — Fundo da página (FAQ, CTA final, footer)
```

Se a LP for curta (menos de 5 seções), agrupe blocos adjacentes.

---

### Passo 2 — Análise Desktop

Para cada bloco, registre:

**Estrutura:**
- Nome descritivo da seção
- Layout: centralizado / coluna dupla / grid / empilhado
- Elemento dominante: texto / imagem / vídeo / formulário / ícones

**Copy:**
- Headline exata (se visível)
- Proposta de valor comunicada
- Tom: formal / descontraído / urgente / técnico / empático
- CTA: texto exato e posição

**Visual:**
- Paleta de cores presente neste bloco (anote os hexadecimais se conseguir inferir)
- Tipografia: serifa / sem serifa / display / tamanho aproximado
- Imagens: produto isolado / lifestyle / pessoa / abstrato / ícone
- Efeitos: sombra / gradiente / overlay / paralaxe / animação

**Conversão:**
- Elemento de conversão presente? Qual?
- Urgência ou escassez? Como?
- Prova social? Tipo e formato?

---

### Passo 3 — Análise Mobile

Repita o protocolo do Passo 2 com foco nas diferenças no mobile (375px):

**Comparar especificamente:**
- O layout colapsa de forma legível ou fica massivo?
- A hierarquia visual se mantém ou inverte?
- O CTA está visível sem rolar no mobile?
- Os textos estão legíveis (mínimo 15px)?
- As imagens se adaptam ou transbordam?
- O formulário (se houver) é usável com teclado mobile?
- Há elementos que somem ou aparecem diferente no mobile?

---

### Passo 4 — Extração de Padrões

Após analisar todos os blocos, consolide:

**Padrão de cores:**
- Cor primária dominante (CTAs, destaques): #___
- Cor de fundo principal: #___
- Cor de fundo alternado: #___
- Cor de texto: #___
- Acento/urgência: #___

**Padrão de tipografia:**
- Família de fonte das headlines: ___
- Família de fonte do corpo: ___
- Peso das headlines: ___
- Tamanho aproximado das headlines desktop: ___

**Padrão de composição:**
- Largura máxima do container: aproximadamente ___px
- Espaçamento entre seções (percepção): generoso / médio / comprimido
- Alinhamento predominante: centralizado / alinhado à esquerda / misto

**Padrão de prova social:**
- Tipo: depoimentos texto / foto + texto / vídeo / números / logos
- Quantidade: ___
- Posição na página: ___

---

### Passo 5 — Diagnóstico de Qualidade

Avalie honestamente:

| Critério | Nota 1-5 | Observação |
|---|---|---|
| Clareza da proposta de valor | | |
| Força do CTA principal | | |
| Qualidade visual geral | | |
| Experiência mobile | | |
| Velocidade percebida | | |
| Prova social | | |
| Fluxo de conversão | | |

---

## Formato de Saída

Gere /projetos/[nome]/analise-lp-referencia.md:

```markdown
# Análise de LP — [Nome/URL da Referência]
Data: [data]
Tipo: [concorrente / referência visual / referência de nicho / LP do cliente]

## Resumo em 3 Linhas
[O que esta LP faz bem, o que faz mal, e o que deve ser aproveitado]

## Mapa de Blocos — Desktop
[Análise por bloco conforme Passo 2]

## Mapa de Blocos — Mobile
[Comparação com desktop, diferenças e problemas]

## Padrões Extraídos
[Cores, tipografia, composição, prova social]

## Diagnóstico de Qualidade
[Tabela de notas]

## O Que Aproveitar Neste Projeto
[Lista específica e acionável]

## O Que Fazer Diferente
[Lista específica e acionável]

## Spec Visual Extraída
[Entrada direta para a skill direcao-visual]
```

---

## Limitações

- Se a LP usa muito JavaScript para renderizar conteúdo, o fetch pode retornar HTML incompleto. Nesse caso, solicite print ou screenshot do operador
- Se a LP estiver atrás de paywall ou login, solicite prints dos blocos principais
- Análise mobile é inferida a partir do CSS responsivo — pode não capturar tudo que acontece num device real. Se possível, peça ao operador para tirar prints do mobile também
