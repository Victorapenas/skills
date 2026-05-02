# Especificação Visual (Visual Spec) — Canal Hamburgueria v6.0

## Metadados
- **Agente:** Diretor de Arte (04.2)
- **Estética:** Premium Food, Dark Mode, High Contrast.

## 1. Paleta de Cores
- **Cor Fundo Principal:** `#0F0F0F` (Dark quase absoluto)
- **Cor Fundo Secundária:** `#1A1A1A` (Para cards e divisões)
- **Cor Primária (Apetite/Ação):** `#E63946` (Vermelho Vivo Premium)
- **Cor Secundária (Velocidade/Destaque):** `#F4A261` (Amarelo/Laranja)
- **Texto Principal:** `#F8F9FA` (Branco Off-White para leitura confortável)
- **Texto Secundário:** `#ADB5BD` (Cinza claro)
- **Botão WhatsApp:** `#25D366` (Verde Padrão Zap)

## 2. Tipografia
- **Títulos e Headlines (H1, H2, H3):** `Bebas Neue` (Forte, condensada, impactante. Estilo lanchonete clássica/americana).
- **Corpo do Texto (P, Span):** `Montserrat` ou `Inter` (Sans-serif geométrica para alta legibilidade em telas pequenas).
- **Pesos:** Títulos em 700/800 (Bold/Black), Corpo em 400 (Regular) ou 500 (Medium).

## 3. Direção de Fotografia (Assets a Produzir/Selecionar)
- **Estilo:** "Food Porn" e "ASMR Visual".
- **Iluminação:** Dramatic lighting (Destaque para o brilho da carne e textura do queijo derretido).
- **Fundos:** Imagens recortadas com perfeição e inseridas sobre o dark mode, criando profundidade (Drop Shadows acentuados, mas suaves).
- **Formatos:** WebP para performance. Hero section usará uma imagem de altíssima qualidade (<= 400kb).

## 4. Estilo de Componentes (UI/UX)
- **Cards:** Bordas levemente arredondadas (`rounded-xl`), fundo `#1A1A1A`, sombra escura para destacar no fundo `#0F0F0F`.
- **Botões:** `rounded-full` ou `rounded-lg`, grandes, fáceis de clicar no mobile (min-height 48px). Animação de `hover:scale-105` e brilho sutil.
- **Ícones:** Minimalistas (estilo Phosphor Icons ou Heroicons), traços grossos para combinar com Bebas Neue. Em cores quentes (Vermelho/Amarelo).

## 5. Animações e Micro-interações
- **Hero:** Imagem do hambúrguer deve ter um leve efeito de fade-in slide-up ao carregar a página.
- **Scroll:** Fade in up (`AOS - animate on scroll`) para as seções subsequentes, mantendo a sensação de fluidez.
- **Hover no Cardápio:** Imagens dos produtos dão um leve zoom (`transform: scale(1.05)`) quando o usuário passa o mouse.
