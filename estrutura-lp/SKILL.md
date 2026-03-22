---
name: estrutura-lp
description: >
  Cria wireframe (Arq.LP ou Arq.Site). Incorpora funil recomendado.
  Ative após benchmark e funil completos.
---

# Estrutura LP v6.0

## Função
Transformar briefing + benchmark + funil em arquitetura de conversão.
Criar wireframe com lógica de seções, CTAs e responsividade.

## ANTES DE EXECUTAR
1. Ler /evolution/estrutura-lp.md (se existir)
2. Registrar início em monitor.md

## Entradas Obrigatórias
- /projetos/[nome]/briefing.md
- /projetos/[nome]/benchmark.md
- /projetos/[nome]/funil.md

---

## Passo 1 — Classificação Inicial

Definir:
- **Objetivo**: captura / venda / WhatsApp / agendamento
- **CTA principal**: texto e ação
- **Temperatura**: frio / morno / quente
- **Nível de consciência**: inconsciente / ciente do problema / ciente da solução / ciente do produto
- **Complexidade**: simples / média / alta

## Passo 2 — Espinha Dorsal

| Espinha | Quando usar |
|---------|-------------|
| **Direta** | Tráfego quente, oferta simples, CTA direto |
| **Autoridade** | Tráfego frio, ticket alto, precisa construir confiança |
| **Educativa** | Público pouco consciente do problema |
| **Consultiva** | Serviço complexo, precisa qualificar lead |
| **Demonstração** | Público precisa ver para crer |
| **Comparativa** | Público está comparando alternativas |

## Passo 3 — Tamanho da LP

| Tamanho | Seções | Quando |
|---------|--------|--------|
| **Curta** | 4-6 | Tráfego quente, oferta simples |
| **Média** | 7-10 | Tráfego morno, precisa prova |
| **Longa** | 10+ | Tráfego frio, ticket alto |

## Passo 4 — Seções Obrigatórias

1. **Hero** (clareza + CTA) — SEMPRE 1ª seção
2. **Prova social** (depoimentos, números)
3. **Benefícios / Resultados**
4. **CTA principal** (após benefícios e ao final)
5. **FAQ / Objeções**

## Seções Opcionais

Problema | Como funciona | Para quem é / não é | Sobre o especialista |
Portfólio | Comparativo | Garantia | Urgência | Vídeo | Mapa | Parceiros

## Passo 5 — Plano de CTAs

- **Hero**: SEMPRE (1º CTA visível)
- **Meio**: após benefícios ou prova social
- **Final**: antes do footer

Texto específico, nunca genérico:
- ✅ "Quero minha consultoria gratuita"
- ❌ "Enviar" / "Clique aqui" / "Saiba mais"

## Passo 6 — Spec por Seção

Para cada seção definir:
- **Função**: por que existe
- **Conteúdo obrigatório**: o que deve conter
- **Provas**: depoimentos, números, logos
- **CTA**: se tem, qual texto e ação
- **Mobile**: como se comporta (stack, prioridade)
- **Tracking**: evento associado

## Passo 7 — Validar contra funil.md

- Funil recomendado está refletido no wireframe?
- Página de obrigado prevista?
- CTAs consistentes com tipo de funil?

---

## Saída: /projetos/[nome]/wireframe.md

Formato:
- Diagnóstico (5 classificações)
- Espinha dorsal escolhida + justificativa
- Mapa estrutural (seção por seção com spec)
- Plano de CTAs (posição + texto + ação)
- Specs do formulário (campos, validação)
- Responsividade (breakpoints, stack mobile)
