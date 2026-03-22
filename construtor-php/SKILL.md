---
name: construtor-php
description: >
  Implementa código PHP completo (Dev PHP). Lê funil.md OBRIGATORIAMENTE.
  Ative após assets aprovados + copy + visual-spec.
---

# Construtor PHP v6.0

## Função
Implementar código PHP completo: estrutura, HTML, Tailwind, lógica,
formulários, banco de dados, segurança.

## ANTES DE EXECUTAR
1. Ler /evolution/construtor-php.md (se existir)
2. Ler funil.md (OBRIGATÓRIO)
3. Registrar início em monitor.md

## Pré-requisitos
- briefing.md + wireframe.md + copy.md + visual-spec.md + funil.md

---

## Estrutura Vanilla PHP

```
/output/code/
├── index.php              ← LP principal
├── obrigado.php           ← Página de obrigado (conversão)
├── privacidade.php        ← Política de privacidade
├── .htaccess              ← Segurança + redirecionamentos
├── .env.example           ← Template de variáveis
├── config/
│   └── database.php       ← Conexão PDO MySQL
├── actions/
│   └── salvar-lead.php    ← Processamento do formulário
├── includes/
│   ├── header.php         ← Head + abertura body
│   ├── footer.php         ← Scripts + fechamento
│   └── functions.php      ← Helpers (CSRF, escape, UTMs)
└── assets/
    ├── css/style.css       ← Estilos customizados
    ├── js/main.js          ← JavaScript
    └── img/                ← Imagens otimizadas
```

---

## Código Base Obrigatório

### config/database.php
```php
$host = getenv('DB_HOST') ?: 'localhost';
$dbname = getenv('DB_NAME') ?: 'projeto';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: '';
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
```

### SQL Tabela de Leads
```sql
CREATE TABLE leads (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL,
  telefone VARCHAR(20),
  origem VARCHAR(100) DEFAULT 'landing-page',
  utm_source VARCHAR(100),
  utm_medium VARCHAR(100),
  utm_campaign VARCHAR(100),
  ip VARCHAR(45),
  user_agent TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### includes/functions.php
- `gerar_csrf()` → `bin2hex(random_bytes(32))`
- `campo_csrf()` → input hidden com token
- `escape($str)` → `htmlspecialchars($str, ENT_QUOTES, 'UTF-8')`
- `capturar_utms()` → `filter_input()` para utm_source, utm_medium, utm_campaign

### actions/salvar-lead.php
1. Verificar POST + CSRF (`hash_equals`)
2. Sanitizar: `filter_input(INPUT_POST, ...)`
3. Validar: nome >= 2 chars, email válido
4. Rate limiting por IP (max 3/min)
5. Salvar via prepared statement PDO
6. Webhook opcional (curl POST JSON)
7. Redirect para obrigado.php

### .htaccess
- Forçar HTTPS
- Rewrite para index.php
- `Options -Indexes`
- Headers de segurança (X-Content-Type, X-Frame-Options, X-XSS-Protection)
- Bloquear .env .log .sql .sh .git
- Cache de assets estáticos
- mod_deflate para compressão

---

## Regras de Build

- CSS com variáveis `:root` + tipografia fluida com `clamp()`
- Mobile-first: CSS base para mobile, `@media (min-width: 768px)` para desktop
- Inputs: `font-size: 16px` mínimo (evita zoom iOS)
- Botões mobile: `width: 100%`, `min-height: 52px`
- Aplicar copy.md seção por seção — nenhum Lorem Ipsum
- Configurar cores do visual-spec no Tailwind config
- Google Fonts com `preconnect`
- Meta Pixel e GA4 via .env (não hardcoded)
- Funil: form+obrigado → criar obrigado.php; WhatsApp → botão com UTMs

## Segurança (OBRIGATÓRIA)
- Prepared statements SEMPRE (PDO)
- `filter_input()` em TODOS os inputs
- `htmlspecialchars()` em TODOS os outputs
- CSRF em TODOS os formulários
- `.env` inacessível publicamente
- `APP_DEBUG=false` em produção

## QA Reverso
Após build, todos os agentes relevantes revisam ANTES do QA formal.

## Saída: /projetos/[nome]/output/code/
