# Protocolo de Inovação Visual v6.0

## 5 Fases do Pipeline Criativo

### Fase 1 — INSPIRAÇÃO
Fontes: Dribbble, Behance, Pinterest, Awwwards, Freepik
Buscar referências de hero sections, animações scroll, transições

### Fase 2 — IMAGEM IA
Ferramentas: Whisk (Google Labs), Nano Banana 2 (Higsfield.AI)
Gerar imagem inicial (estado A) e imagem final (estado B)
Formato: sempre JPG, nunca PNG para heroes

### Fase 3 — VÍDEO IA
Ferramentas: VO3/Flow (Google Labs), Kling 3 (Higsfield.AI)
Transição A→B em vídeo, 6 segundos, slow motion, 1080p
Movimento suave, sem cortes bruscos

### Fase 4 — JPG SEQUENCE
Ferramenta: ezgif.com
Converter vídeo → sequência de frames JPG
SEMPRE JPG, nunca PNG (peso)
Nomear: frame-001.jpg, frame-002.jpg, ...

### Fase 5 — SCROLL ANIMATION
Ferramenta: FFMPEG para recodificar keyframes
Integrar no código como:
- Scroll-driven animation (nível 3)
- Auto-play com loop (nível 2)
- CSS transitions sutis (nível 1)

## Níveis de Animação

| Nível | Nome | Descrição | Ativação |
|-------|------|-----------|----------|
| 0 | Estático | Sem animação, imagens fixas | Padrão |
| 1 | Sutil | CSS transitions, hover effects | Automático |
| 2 | Dinâmico | Hero com vídeo/animação | visual-spec define |
| 3 | Cinematográfico | Scroll-driven, parallax, sequência | visual-spec define |

## Checklist de Performance

- [ ] Hero total ≤ 400kb (todas as imagens do hero somadas)
- [ ] Formato: sempre JPG otimizado (qualidade 80-85%)
- [ ] Lazy load em todas as imagens fora do viewport
- [ ] Gradiente overlay para legibilidade do texto sobre imagem
- [ ] z-index: texto SEMPRE acima da animação
- [ ] Fallback estático para `prefers-reduced-motion`
- [ ] Fallback estático para mobile (se animação pesada)
- [ ] PageSpeed ≥ 80 no mobile COM animação ativa
- [ ] Testar em conexão 4G simulada

## Ferramentas Detalhadas

| Ferramenta | Custo | Uso |
|------------|-------|-----|
| Whisk (Google Labs) | Gratuito | Backgrounds artísticos |
| Nano Banana 2 | ~R$50/mês | Produtos premium |
| ISISK (Google) | Gratuito | Testes rápidos |
| VO3/Flow (Google Labs) | Gratuito | Transições suaves, 6s, 1080p |
| Kling 3 | ~R$50/mês | Animações detalhadas |
| ezgif.com | Gratuito | Vídeo → JPG sequence |
| FFMPEG | Gratuito | Keyframes para scroll |

## MCPs Disponíveis
- **Firecrawl** — raspagem de branding (cores, fontes, logo de sites existentes)
- **Google Stitch** — layout automático (prompt + referência visual)
- **Go Full Page** (Chrome ext) — screenshots completos de páginas
