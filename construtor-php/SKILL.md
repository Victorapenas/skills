---
name: construtor-php
description: >
  Ative esta skill para implementar o código PHP completo da landing page ou site.
---

# Agente Construtor PHP — PHP Landing Page Factory

Você é responsável por codificar a LP após a aprovação visual e cópia. Devido ao alto volume de regras, seu conhecimento foi dividido em módulos.

ANTES de começar a codar, você DEVE LER os seguintes submódulos:
1. `c:\skills\construtor-php\modulo-seguranca.md` — Contém regras estritas de PDO, CSRF, .htaccess e actions seguras.
2. `c:\skills\refinamento-mobile\SKILL.md` — Contém as lógicas de fluidez e interface CSS perfeitas que devem guiar seu frontend.

## Rastreamento e Analytics — Incluir em Todo Projeto

### Estrutura de rastreamento no index.php

No <head>, antes do </head>:
```html
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function()
{n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;
s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}
(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<?= htmlspecialchars($pixel_id ?? "PIXEL_ID") ?>');
fbq('track', 'PageView');
</script>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;
j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-XXXXX');</script>
```

No <body>, logo após <body>:
```html
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
```

### Captura de UTMs no assets/js/main.js
```javascript
// Captura e armazena UTMs
function capturarUTMs() {
  const params = new URLSearchParams(window.location.search);
  const utms = {
    source:   params.get('utm_source')   || '',
    medium:   params.get('utm_medium')   || '',
    campaign: params.get('utm_campaign') || '',
    content:  params.get('utm_content')  || '',
    term:     params.get('utm_term')     || ''
  };
  if (Object.values(utms).some(v => v !== '')) {
    sessionStorage.setItem('utms', JSON.stringify(utms));
  }
  return utms;
}
capturarUTMs();

// Injeta UTMs no formulário antes do envio
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('form-lead');
  if (!form) return;

  form.addEventListener('submit', function() {
    const utms = JSON.parse(sessionStorage.getItem('utms') || '{}');
    Object.entries(utms).forEach(([key, value]) => {
      if (value) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'utm_' + key;
        input.value = value;
        form.appendChild(input);
      }
    });

    // Evento de conversão
    if (typeof fbq !== 'undefined') fbq('track', 'Lead');
    if (typeof gtag !== 'undefined') gtag('event', 'generate_lead');
  });
});
```

### Campo de UTMs na tabela de leads

Adicionar ao SQL da tabela:
```sql
utm_source   VARCHAR(100),
utm_medium   VARCHAR(100),
utm_campaign VARCHAR(100),
utm_content  VARCHAR(100),
utm_term     VARCHAR(100),
```

Adicionar ao salvar-lead.php para capturar:
```php
$utm_source   = filter_input(INPUT_POST, 'utm_source',   FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$utm_medium   = filter_input(INPUT_POST, 'utm_medium',   FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
$utm_campaign = filter_input(INPUT_POST, 'utm_campaign', FILTER_SANITIZE_SPECIAL_CHARS) ?? '';
```

### Como validar em produção

Facebook Pixel: instalar extensão "Meta Pixel Helper" no Chrome
→ Abre a LP → extensão mostra se pixel disparou e os eventos

Google Tags: instalar extensão "Tag Assistant Legacy" no Chrome
→ Abre a LP → extensão mostra GTM e GA4 ativos

UTMs: testar URL com parâmetros:
http://seusite.com/?utm_source=facebook&utm_medium=paid&utm_campaign=teste
→ Abrir Console do Chrome (F12) → digitar: sessionStorage.getItem('utms')
→ Deve retornar o JSON com os valores


## Passo a Passo
1. Confirme a arquitetura (Vanilla PHP > 90% dos casos de LPs).
2. Estruture as pastas (assets, includes, config).
3. Consulte o `modulo-seguranca.md` para implementar o database, functions.php e .htaccess.
4. Codifique o `index.php` puxando o design/wireframe e incorporando o CSS puro fluido e Tailwind para utilitários secundários.
5. Incorpore os forms com validação anti-XSS.
