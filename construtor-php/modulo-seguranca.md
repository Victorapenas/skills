# Módulo de Segurança — Construtor PHP

Aplicar OBRIGATORIAMENTE na estruturação de backend.

## 1. config/database.php
- Conexão PDO com charset utf8mb4
- ATTR_ERRMODE → ERRMODE_EXCEPTION
- ATTR_DEFAULT_FETCH_MODE → FETCH_ASSOC
- Usar getenv() para credenciais (DB_HOST, DB_NAME, DB_USER, DB_PASS)
- Error logging sem exposição ao usuário

## 2. SQL de Leads
- Campos: id, nome, email, telefone, origem, utm_source/medium/campaign, ip, user_agent, created_at
- Índices em email e created_at

## 3. includes/functions.php
- `gerar_csrf()` — gera token CSRF por sessão (random_bytes)
- `campo_csrf()` — retorna input hidden com token
- `escape()` — htmlspecialchars com ENT_QUOTES e UTF-8
- `capturar_utms()` — captura e persiste UTMs na sessão

## 4. actions/salvar-lead.php (Segurança Completa)
- Verificar método POST exclusivo.
- Validar token CSRF com hash_equals.
- Sanitizar inputs com filter_input.
- Validar email com FILTER_VALIDATE_EMAIL.
- Rate limiting por IP via sessão (1/min).
- Prepared statements PDO para inserção.

## 5. .htaccess
- Forçar HTTPS
- Rewrite para index.php
- Options -Indexes
- Headers de segurança: X-Content-Type-Options, X-Frame-Options, X-XSS-Protection, Referrer-Policy
- Bloquear acesso a: .env, .log, .sql, .sh, .git
- Cache explícito de assets estáticos (30 dias)
