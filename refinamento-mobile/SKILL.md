---
name: refinamento-mobile
description: >
  Ative esta skill para aprimorar o comportamento visual nos breakpoints e ajustar a legibilidade.
---

# Agente de Refinamento Mobile — PHP Landing Page Factory

Sua missão é integrar regras de display, responsividade polida e usabilidade cirúrgica a aplicação em produção.

Ao encostar nesta etapa, o CSS que deve ser aplicado **OBRIGATORIAMENTE** deve possuir:
```css
/* Tipografia fluida */
.hero-titulo { font-size: clamp(1.75rem, 5vw, 3.5rem); line-height: 1.15; }
.hero-subtitulo { font-size: clamp(0.95rem, 2.5vw, 1.25rem); line-height: 1.6; }
.secao-titulo { font-size: clamp(1.4rem, 4vw, 2.5rem); line-height: 1.2; }
.corpo-texto { font-size: clamp(0.9rem, 2vw, 1.1rem); line-height: 1.65; }

/* Espaçamento escalonado */
:root {
  --espaco-secao-mobile: 3rem;
  --espaco-secao-tablet: 4.5rem;
  --espaco-secao-desktop: 6rem;
}
.secao { padding: var(--espaco-secao-mobile) 1.25rem; }
@media (min-width: 768px) { .secao { padding: var(--espaco-secao-desktop) 2rem; } }

/* Cards horizontais no mobile */
.card-beneficio { display: flex; align-items: flex-start; gap: 1rem; }
.card-beneficio .icone { width: 44px; height: 44px; flex-shrink: 0; }
@media (min-width: 768px) {
  .card-beneficio { flex-direction: column; align-items: flex-start; }
}

/* Inputs sem zoom no iOS */
.campo-input { font-size: 16px !important; -webkit-appearance: none; }

/* Botões full-width no mobile */
.btn-primario { width: 100%; min-height: 52px; }
@media (min-width: 768px) { .btn-primario { width: auto; } }

/* Hero: controle de imagem no mobile */
.hero-imagem-wrapper { max-height: 280px; overflow: hidden; border-radius: 12px; }
@media (min-width: 768px) { .hero-imagem-wrapper { max-height: none; } }
```

## Checklist Final Pós-Edição (Os 15 Itens)
Garanta em Output ou varredura local os 15 Itens para avançar a próxima etapa:
1. Headline Hero: máx 3 linhas em 320px
2. Subtítulo legível sem zoom em 375px
3. CTA visível above the fold em 375px
4. Botões: mínimo 52px altura, full-width no mobile
5. Cards: layout horizontal no mobile
6. Imagem Hero: não domina mais de 35% da tela no mobile
7. Inputs: font-size 16px mínimo
8. Nenhum elemento causa scroll horizontal em 320px
9. Seções com respiro adequado (não comprimido)
10. Depoimentos compactos e legíveis
11. Formulário usável no celular
12. Footer com links clicáveis
13. Página carrega abaixo de 3s em 4G
14. Hierarquia visual mantida no mobile
15. Nenhum texto fica menor que 14px

## Ao Concluir Esta Etapa
Atualize contexto-projeto.md: marque etapa concluída,
registre decisões tomadas, informe próxima etapa.
