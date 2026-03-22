---
name: refinamento-mobile
description: >
  Ative após o build PHP para revisar e aprimorar a experiência mobile.
  Foca em CSS refinado, tipografia fluida, espaçamento correto e hierarquia
  visual equilibrada. Transforma "responsivo técnico" em "visualmente premium".
---

# Agente de Refinamento Mobile

## Função

Revisão específica e profunda da experiência mobile após o build. Não é sobre fazer funcionar — é sobre fazer parecer profissional, leve e bem resolvido no celular.

---

## A Diferença Entre Responsivo e Refinado

**Responsivo técnico:** a página não quebra no mobile. O layout colapsa para uma coluna. Funciona.

**Refinado visualmente:** o mobile tem sua própria hierarquia. Os elementos respiram. O espaçamento é adequado para tela pequena. As fontes têm proporção correta. Os CTAs ocupam o espaço certo. A pessoa que chega no celular tem uma experiência boa, não uma versão comprimida do desktop.

---

## Checklist de Problemas Comuns (e como corrigir)

### Problema 1 — Textos muito grandes no mobile

**Sintoma:** O headline do Hero fica enorme no celular, ocupa 4+ linhas, domina demais.

**Correção:**
```css
/* Tipografia fluida — escala automaticamente com a tela */
.hero-titulo {
  font-size: clamp(1.75rem, 5vw, 3.5rem);
  /* 1.75rem no mínimo (320px) → até 3.5rem no máximo (desktop) */
  line-height: 1.15;
  letter-spacing: -0.02em;
}

.hero-subtitulo {
  font-size: clamp(0.95rem, 2.5vw, 1.25rem);
  line-height: 1.6;
}

.secao-titulo {
  font-size: clamp(1.4rem, 4vw, 2.5rem);
  line-height: 1.2;
}

.corpo-texto {
  font-size: clamp(0.9rem, 2vw, 1.1rem);
  line-height: 1.65;
}
```

---

### Problema 2 — Padding excessivo nas seções

**Sintoma:** Seções com muito espaço vertical no mobile, página parece interminável.

**Correção:**
```css
/* Sistema de espaçamento escalonado */
:root {
  --espaco-secao-mobile: 3rem;    /* 48px no mobile */
  --espaco-secao-tablet: 4.5rem;  /* 72px no tablet */
  --espaco-secao-desktop: 6rem;   /* 96px no desktop */
  
  --espaco-interno-mobile: 1.25rem;  /* padding interno das seções */
  --espaco-interno-desktop: 2rem;
}

.secao {
  padding: var(--espaco-secao-mobile) var(--espaco-interno-mobile);
}

@media (min-width: 640px) {
  .secao {
    padding: var(--espaco-secao-tablet) var(--espaco-interno-desktop);
  }
}

@media (min-width: 1024px) {
  .secao {
    padding: var(--espaco-secao-desktop) var(--espaco-interno-desktop);
  }
}
```

---

### Problema 3 — Blocos de cards pesados no mobile

**Sintoma:** Grid de 3 colunas colapsa para 1 coluna mas os cards ficam grandes demais, ocupam muito espaço.

**Correção:**
```css
/* Cards mais compactos no mobile */
.card-beneficio {
  padding: 1.25rem;
  border-radius: 12px;
}

/* Mobile: cards horizontais (ícone + texto lado a lado) */
.card-beneficio {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  text-align: left;
}

.card-beneficio .icone {
  width: 40px;
  height: 40px;
  flex-shrink: 0;
}

/* Desktop: cards verticais (ícone em cima) */
@media (min-width: 768px) {
  .card-beneficio {
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  
  .card-beneficio .icone {
    width: 56px;
    height: 56px;
  }
}
```

---

### Problema 4 — Hero com imagem pesada no mobile

**Sintoma:** Hero com imagem grande empilha texto + imagem enorme, página começa pesada.

**Correção:**
```css
/* Hero mobile: imagem menor, não dominante */
.hero-imagem-wrapper {
  width: 100%;
  max-height: 280px;   /* limita altura no mobile */
  overflow: hidden;
  border-radius: 12px;
  margin-top: 1.5rem;
}

.hero-imagem-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: top center; /* foca no rosto/produto */
}

@media (min-width: 768px) {
  .hero-imagem-wrapper {
    max-height: none;  /* sem limite no desktop */
    margin-top: 0;
  }
}

/* Alternativa: imagem como fundo com overlay no mobile */
.hero-com-fundo-mobile {
  background-image: linear-gradient(
    to bottom,
    rgba(0,0,0,0.65) 0%,
    rgba(0,0,0,0.3) 100%
  ), url('assets/img/hero.jpg');
  background-size: cover;
  background-position: center top;
  min-height: 480px;
  display: flex;
  align-items: center;
}
```

---

### Problema 5 — CTAs sem área de toque adequada

**Sintoma:** Botões pequenos, difíceis de tocar no celular.

**Correção:**
```css
/* CTA mobile: full width, grande o suficiente */
.btn-primario {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 100%;
  min-height: 52px;        /* maior que o mínimo de 48px */
  padding: 0.875rem 1.5rem;
  font-size: 1rem;
  font-weight: 700;
  border-radius: 10px;
  text-align: center;
  letter-spacing: 0.01em;
}

/* Micro-copy abaixo do botão — menor e mais discreta */
.cta-micro-copy {
  font-size: 0.8rem;
  color: var(--cor-texto-suave);
  text-align: center;
  margin-top: 0.5rem;
  line-height: 1.4;
}

@media (min-width: 768px) {
  .btn-primario {
    width: auto;
    padding: 1rem 2.5rem;
    font-size: 1.05rem;
  }
}
```

---

### Problema 6 — Depoimentos com foto empilhados pesadamente

**Sintoma:** Seção de depoimentos ocupa demais no mobile, parece interminável.

**Correção:**
```css
/* Depoimentos: horizontal no mobile (foto + texto lado a lado) */
.depoimento-card {
  display: flex;
  gap: 1rem;
  align-items: flex-start;
  padding: 1.25rem;
  background: var(--cor-fundo-alt);
  border-radius: 12px;
}

.depoimento-foto {
  width: 48px;
  height: 48px;
  border-radius: 50%;
  flex-shrink: 0;
  object-fit: cover;
}

.depoimento-conteudo {
  flex: 1;
}

.depoimento-texto {
  font-size: 0.9rem;
  line-height: 1.55;
  color: var(--cor-texto);
  margin-bottom: 0.5rem;
}

.depoimento-autor {
  font-size: 0.8rem;
  font-weight: 600;
  color: var(--cor-texto-suave);
}
```

---

### Problema 7 — Formulário difícil de usar no mobile

**Sintoma:** Campos pequenos, labels coladas, zoom automático do iOS.

**Correção:**
```css
/* Inputs: font-size 16px mínimo para evitar zoom no iOS */
.campo-input,
.campo-input:focus {
  font-size: 16px !important;  /* iOS faz zoom se menor que 16px */
  padding: 0.875rem 1rem;
  border-radius: 8px;
  border: 2px solid #e2e8f0;
  width: 100%;
  transition: border-color 0.2s ease;
  -webkit-appearance: none;    /* remove estilo padrão iOS */
  appearance: none;
}

.campo-input:focus {
  border-color: var(--cor-primaria);
  outline: none;
  box-shadow: 0 0 0 3px rgba(var(--cor-primaria-rgb), 0.15);
}

.campo-label {
  display: block;
  font-size: 0.875rem;
  font-weight: 600;
  color: var(--cor-texto);
  margin-bottom: 0.375rem;
}

.campo-grupo {
  margin-bottom: 1rem;
}
```

---

## Checklist de Revisão Final Mobile

Execute após aplicar os ajustes:

```
[ ] Headline do Hero: máx 2-3 linhas no iPhone SE (320px)
[ ] Subtítulo legível sem zoom em 375px
[ ] CTA visível acima da dobra em 375px (sem precisar rolar)
[ ] Botões: mínimo 52px de altura, full-width no mobile
[ ] Cards de benefícios: layout horizontal no mobile
[ ] Imagem do Hero: não domina mais de 35% da tela no mobile
[ ] Seções: respiro adequado — não parece comprimido nem vazio
[ ] Depoimentos: compactos e legíveis
[ ] Formulário: campos grandes, sem zoom automático no iOS
[ ] Footer: links clicáveis com área de toque adequada
[ ] Nenhum elemento causa scroll horizontal em 320px
[ ] Página carrega em menos de 3 segundos em conexão 4G
```

---

## Saída

Após aplicar refinamentos, informar:
> "Refinamento mobile aplicado. [X] problemas corrigidos. Checklist: [aprovados/reprovados]. Pronto para QA final."
