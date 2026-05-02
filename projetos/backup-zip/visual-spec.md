# Especificação Visual (Visual Spec) — Portfólio Sonbatera v6.0

## Metadados
- **Agente:** Diretor de Arte (04.2)
- **Estética:** Premium Artist, Stage Dark Mode, Dynamic & Energetic.

## 1. Paleta de Cores
- **Cor Fundo Principal:** `#050505` (Preto absoluto de palco).
- **Cor Secundária (Apoios/Cards):** `#111111` ou `#1A1A1A`.
- **Cor Primária (Destaques e CTA):** `#FF3366` (Rosa/Vermelho Neon) ou `#D4AF37` (Dourado de bateria). Decidido: **#D4AF37 (Dourado)** para transmitir excelência e prestígio.
- **Texto Principal:** `#FFFFFF` (Branco puro).
- **Texto Secundário:** `#A0A0A0` (Cinza metálico).

## 2. Tipografia
- **Títulos (H1, H2, H3):** `Oswald` ou `Tungsten` (Fontes condensadas e altas, remetem ao peso visual de um pôster de show).
- **Corpo (P):** `Inter` ou `Manrope` (Limpa, excelente leitura).

## 3. Direção de Fotografia (Assets Locais)
- Selecionar fotos da pasta fornecida.
- Aplicar filtros para aumentar o contraste e uniformizar a cor (e.g., leve desaturação do fundo e realce nos tons de pele e nos pratos da bateria).
- O fundo do Hero deve ser uma foto estendida (cover) com overlay de gradiente escuro (0 a 80% opacity) de baixo para cima, para que o texto em branco fique 100% legível.

## 4. UI e Micro-interações
- **Carrossel de Nomes:** Loop infinito com opacity reduzida (`40%`), que fica `100%` brilhante ao passar o mouse.
- **Botões:** Bordas retas ou `rounded-md`, sólidas na cor Dourada com texto preto. Animação de expansão de fundo (sweep).
- **Players de Vídeo:** Sombras de caixa longas com a cor de destaque esfumaçada (glow effect).

## 5. Mobile
- Manter o Hero imersivo (100vh) com o CTA sempre acima da dobra inferior.
- Grid de vídeos com rolagem horizontal (swipe) no mobile para economizar espaço vertical.
