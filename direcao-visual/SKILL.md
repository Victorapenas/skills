---
name: direcao-visual
description: >
  Define identidade visual (Diretor de Arte). Logo = ponto de partida.
  Ative após copy aprovada, em paralelo com copy.
---

# Direção Visual v6.0

## Função
Converter estratégia em sistema visual aplicável.
Design como função — forma segue conversão.

## ANTES DE EXECUTAR
1. Ler /evolution/direcao-visual.md (se existir)
2. Receber dados do Leitor de Marca (Agente 03) como ponto de partida
3. Registrar início em monitor.md

## Entradas: briefing.md + wireframe.md + copy.md + benchmark.md

**Regra absoluta**: hex da logo > qualquer referência externa

---

## Processo (8 Etapas)

### 1. Diagnóstico Visual
- Posicionamento: premium / popular / técnico / acessível
- Público: faixa etária, estilo, expectativa visual
- Tom emocional: confiança / urgência / sofisticação / empatia
- Impressão em 3s: o que o visitante DEVE sentir ao abrir

### 2. Sistema de Cores (derivado da logo)

| Uso | Hex | Tailwind | Nome |
|-----|-----|----------|------|
| Primária (CTAs) | #_____ | primary | [nome] |
| Secundária | #_____ | secondary | [nome] |
| Fundo | #_____ | bg | [nome] |
| Fundo alternado | #_____ | bg-alt | [nome] |
| Texto principal | #_____ | text | [nome] |
| Texto secundário | #_____ | text-muted | [nome] |
| Sucesso | #_____ | success | [nome] |
| Erro | #_____ | error | [nome] |

**CTA SEMPRE na cor primária com máximo contraste**

### 3. Tipografia

| Elemento | Fonte | Peso | Desktop | Mobile |
|----------|-------|------|---------|--------|
| H1 | [fonte] | Bold | [px] | [px] |
| H2 | [fonte] | SemiBold | [px] | [px] |
| H3 | [fonte] | Medium | [px] | [px] |
| Body | [fonte] | Regular | 16px | 14px |
| Labels | [fonte] | Medium | 14px | 12px |
| CTA | [fonte] | Bold | 16-18px | 16px |

Fontes recomendadas: Inter, Poppins, Outfit, Playfair Display
Carregar via Google Fonts com `preconnect`

### 4. Estilo Visual
- Densidade: espaçosa / equilibrada / compacta
- Contraste: alto / médio / sutil
- Temperatura: quente / neutra / fria
- Bordas: nenhuma / sutis / marcadas
- Cantos: arredondados (8px) / retos / pill
- Sombras: nenhuma / sutis / marcadas

### 5. Direção por Seção
Para cada seção do wireframe:
- Layout (grid, flexbox, composição)
- Hierarquia visual (o que chama atenção primeiro)
- Asset principal (tipo, formato, posição)
- Cores (fundo, texto, destaque)
- Mobile (como adapta)

### 6. Plano de Assets

| Seção | Asset | Tipo | Formato | Proporção | Prioridade |
|-------|-------|------|---------|-----------|------------|

**Formatos por tipo:**
| Tipo | Formato |
|------|---------|
| Pessoa recortada | PNG transparente |
| Foto com cenário | JPG/PNG |
| Produto isolado | PNG transparente |
| Ícone/elemento | SVG ou PNG transparente |
| Fundo de seção | JPG otimizado |
| Avatar/depoimento | JPG 1:1 |

**Proporções:**
| Proporção | Uso |
|-----------|-----|
| 9:16 | Hero mobile, stories |
| 16:9 | Hero desktop, banner |
| 1:1 | Depoimento, avatar, ícone |
| 4:5 | Produto com pessoa |
| 3:2 | Foto editorial |

### 7. Prompts Base (Inglês)
Para cada asset: modo, formato, proporção, seção, prompt em inglês

### 8. Responsividade

**Breakpoints:**
- < 640px → Mobile
- 640-1024px → Tablet
- > 1024px → Desktop

**Regras Mobile:**
- CTA visível sem scroll (above the fold)
- Botões: min-height 44px (touch target)
- Padding lateral: 16px
- Colunas desktop → stack vertical mobile
- H1: mobile 24-32px / desktop 40-56px
- Inputs: font-size 16px mín (evita zoom iOS)

---

## Estados Interativos

| Estado | Regra |
|--------|-------|
| Hover | Escurecer 10% ou sombra sutil |
| Focus | Borda primária + outline acessível |
| Active | Escurecer 15% |
| Disabled | Opacidade 50% + cursor not-allowed |

---

## Saída: /projetos/[nome]/visual-spec.md

## Checklist
- [ ] Paleta derivada da logo
- [ ] Tipografia com tamanhos desktop E mobile
- [ ] Assets mapeados por seção com formato e proporção
- [ ] Prompts em inglês para geração
- [ ] Breakpoints definidos
- [ ] Estados interativos especificados
