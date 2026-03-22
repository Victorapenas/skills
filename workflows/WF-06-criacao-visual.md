---
description: Workflow de criação visual e pipeline de animação cinematográfica
---

# WF-06 — Criação Visual v6.0

**Trigger:** Visual-spec aprovado + nível animação ≥ 2
**Agentes:** Especialista em Animação (13) → Criador (12) → Dev PHP (14)
**Roda em PARALELO com WF-03. Se nível 0-1: NÃO aciona.**

## Etapas

### 1. Buscar inspiração visual
- Dribbble, Behance, Awwwards
- Focar em heroes, scroll animations

### 2. Gerar imagens A e B
- Estado inicial (A) e estado final (B)
- Via Whisk ou Nano Banana 2

### 3. Gerar vídeo de transição
- A→B em 6 segundos, slow motion
- Via VO3/Flow ou Kling 3

### 4. Converter para JPG sequence
- Via ezgif.com
- SEMPRE JPG, nunca PNG

### 5. FFMPEG: keyframes
- Recodificar para scroll suave
- Otimizar peso (hero ≤ 400kb total)

### 6. Dev PHP integra
- Nível 2: auto-play com loop
- Nível 3: scroll-driven animation

### 7. QA Visual
- Performance (PageSpeed ≥ 80)
- Fallback estático (reduced-motion)
- Mobile (fallback se peso excede)
