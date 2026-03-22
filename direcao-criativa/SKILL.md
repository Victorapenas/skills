---
name: direcao-criativa
description: >
  Agente Criativo (Especialista em Animação). Pipeline visual.
  Ativado SOMENTE se nível animação >= 2.
---

# Direção Criativa v6.0

## Função
Pipeline visual cinematográfico para heroes e seções animadas.
Ativado SOMENTE quando visual-spec define nível animação ≥ 2.
Se nível 0-1: NÃO é acionado.

## ANTES DE EXECUTAR
1. Ler /evolution/direcao-criativa.md (se existir)
2. Verificar nível de animação no visual-spec.md
3. Registrar início em monitor.md

---

## Níveis de Animação

| Nível | Nome | Descrição | Tecnologia |
|-------|------|-----------|------------|
| 0 | Estático | Sem animação, imagens fixas | — |
| 1 | Sutil | CSS transitions, hover, fade-in | CSS only |
| 2 | Dinâmico | Hero com vídeo/animação de fundo | JPG sequence |
| 3 | Cinematográfico | Scroll-driven, parallax completo | JS + FFMPEG |

---

## Pipeline (Nível ≥ 2)

### Fase 1 — Inspiração
Buscar referências em Dribbble, Behance, Awwwards
Focar em: hero sections, scroll animations, transições

### Fase 2 — Imagem IA
Ferramentas: Whisk (Google Labs), Nano Banana 2
Gerar estado inicial (A) e estado final (B) da animação

### Fase 3 — Vídeo IA
Ferramentas: VO3/Flow (Google Labs), Kling 3
Transição A→B: 6 segundos, slow motion, 1080p
Movimento suave, sem cortes bruscos

### Fase 4 — JPG Sequence
Ferramenta: ezgif.com
Converter vídeo → sequência de frames JPG
SEMPRE JPG, nunca PNG (peso)

### Fase 5 — FFMPEG (Keyframes)
Recodificar com keyframes para scroll suave
Otimizar peso total (hero ≤ 400kb)

### Fase 6 — Integrar no Código
Nível 2: auto-play com loop
Nível 3: scroll-driven animation

---

## Checklist de Performance

- [ ] Hero total ≤ 400kb
- [ ] Formato JPG (nunca PNG para sequência)
- [ ] Fallback estático para `prefers-reduced-motion`
- [ ] Fallback estático para mobile (se peso excede)
- [ ] PageSpeed ≥ 80 mobile com animação ativa
- [ ] Gradiente overlay para legibilidade do texto
- [ ] z-index: texto > animação
- [ ] Lazy load nos frames fora do viewport

---

## Saída: /projetos/[nome]/animacao-spec.md

Formato:
- Nível de animação
- Conceito visual (inspiração)
- Assets gerados (A, B, vídeo, frames)
- Specs técnicas (formato, peso, keyframes)
- Integração no código (como implementar)
- Fallbacks (mobile, reduced-motion)
