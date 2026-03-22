---
name: gerador-imagem
description: >
  Gera assets visuais com IA. 4 modos: PESSOA, PRODUTO, ELEMENTO, ZERO.
  Ative após visual-spec aprovado.
---

# Gerador de Imagem — Asset Visual Engine v6.0

## Identificação Inicial
Sempre identificar modo + perguntar formato (JPEG/PNG/PNG transparente) + seção da LP
Sempre perguntar: "Formato? + Seção?"

---

## MODO 1 — PESSOA (5 Passos — Foto Cinematográfica)

### Passo 1 — Análise e Prompt Base
Anexar referência de cena/pose. Prompt cinematográfico em inglês,
texto corrido. Usar "a man" ou "a woman".
Incluir: composição, ângulo 85mm, pose, expressão, roupas, iluminação, ambiente.
Estilo: Leica SL2, Kodak Portra 400.
**NÃO gerar imagem ainda.**

### Passo 2 — Enriquecimento Cinematográfico
Reescrever com Phase One XF 50mm f/1.2.
Adicionar: iluminação dinâmica, contraste, atmosfera, luz volumétrica, profundidade.
Manter enquadramento, pose, expressão.
**NÃO gerar ainda.**

### Passo 3 — Aplicação do Rosto Real
Anexar 2-3 fotos reais do cliente.
Substituir rosto genérico pelo real — true locked-frame replica.
Fidelidade total ao rosto.
**NÃO gerar ainda.**

### Passo 4 — Profundidade de Campo
Ultra shallow DOF f/1.8. Smooth spherical bokeh.
Sujeito nítido, fundo suave.
Foreground blur se aplicável.
**NÃO gerar ainda.**

### Passo 5 — Geração Final + Prompt Master
Reduzir prompt mantendo essência → Gerar imagem → Entregar:
- 🖼️ Imagem final
- 📋 Prompt Master (versão final)
- ❌ Negative prompt
- ⚙️ Parâmetros por IA

---

## MODO 2 — PRODUTO (4 Passos — Product Photography)

### Passo 1 — Análise
Anexar fotos do produto (mínimo 2).
Prompt: forma, material, cor, ângulo, superfície, iluminação, fundo, props, atmosfera.

### Passo 2 — Render Premium
Hasselblad X2D 100C, 90mm macro. Three-point studio lighting.
Materiais: plástico/metal/vidro/orgânico/tecido — cada um tem tratamento.
Se PNG transparente: isolated, clean edge extraction.

### Passo 3 — Geração
Gerar via IA, validar qualidade, entregar pacote.

### Passo 4 — Versão em Cena (Opcional)
Produto em uso com pessoa. Lifestyle photography.

---

## MODO 3 — ELEMENTO (3 Passos — 3D/Ícone/Textura/Efeito/Mockup)

### Passo 1 — Especificação
Tipo: A) Objeto 3D | B) Ilustração | C) Textura | D) Efeito | E) Mockup
Paleta hex, fundo, proporção, nível de detalhe.

### Passo 2 — Prompt Render Premium
Blender/C4D quality (3D), Illustrator (vetorial), VFX (efeitos).

### Passo 3 — Geração + Entrega

---

## MODO 4 — ZERO (3 Passos — Criativo Livre)

### Passo 1 — Ler briefing + visual-spec
### Passo 2 — Propor 3 conceitos visuais (aguardar escolha do operador)
### Passo 3 — Desenvolver conceito escolhido via modo correspondente

---

## Negative Prompts Padrão
```
blurry, low quality, watermark, deformed hands, bad anatomy,
plastic skin, painting style, cartoon, CGI look, overexposed,
underexposed, text overlay, logo overlay, stock photo feel
```

## Parâmetros por IA

| IA | Parâmetros |
|----|-----------|
| Midjourney | --ar [X] --style raw --q 2 --v 6.1 |
| DALL-E 3 | quality: hd, style: natural |
| Stable Diffusion | CFG 7, Steps 35, DPM++ 2M Karras |
| Ideogram | Realistic, High Quality |

## Limites de Peso
- Hero: ≤ 400kb
- Produto: ≤ 300kb
- Ícone: ≤ 50kb

## Registro: /projetos/[nome]/output/images/registro-imagens.md

| Arquivo | Modo | Status | Seção | Formato | Prompt | Data |
|---------|------|--------|-------|---------|--------|------|

Após gerar cada asset: "Deseja ajustar ou posso salvar e seguir?"

## Saída: /projetos/[nome]/output/images/
