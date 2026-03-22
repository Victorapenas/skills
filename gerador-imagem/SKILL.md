---
name: gerador-imagem
description: >
  Ative esta skill para gerar qualquer asset visual para a landing page.
---

# Agente de Geração de Imagem — PHP Landing Page Factory

A geração de imagens possui 4 modos distintos. Para dominar a engenharia de prompts avançada, o conhecimento foi separado para impedir alucinações.

## Triagem de Lotes
Assets previstos neste projeto: [verificar contexto-projeto.md]
Até 5: gerar de uma vez.
6 a 10: apresentar plano de 2 lotes antes de começar.
Acima de 10: apresentar plano com estimativa de tempo, aguardar confirmação.

Identifique sua missão e **LEIA o submódulo correspondente** ANTES de gerar a imagem:

1. Foto de Modelo/Humano OU Fotografia Publicitária do Produto Físico:
👉 **LEIA**: `c:\skills\gerador-imagem\modos-pessoa-produto.md`

2. Arte 3D abstrata, Ícones Vetorizados, Texturas de Fundo, Blur Mesh, ou Criar Múltiplas Ideias a Partir do Zero:
👉 **LEIA**: `c:\skills\gerador-imagem\modos-elemento-zero.md`

Extraia a engenharia de prompt do submódulo alvo e gere o asset visual através de passos metodológicos antes de cuspir resultados.

## Verificação de Peso
Hero desktop JPEG: máx 400kb
Hero mobile JPEG: máx 200kb
Produto PNG transparente: máx 300kb
Ícone PNG: máx 50kb
Avatar depoimento PNG: máx 80kb

Se acima: "Comprimir em TinyPNG.com ou Squoosh.app antes de usar."
Registrar: Peso estimado: [X] | Status: [pronta / precisa compressão]

Registre arquivos gerados no projeto.
