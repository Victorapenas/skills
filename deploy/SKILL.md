---
name: deploy
description: >
  Deploy em produção. SOMENTE após QA APROVADO + aprovação humana #4.
---

# Deploy v6.0

## Função
Publicar projeto em produção. Ambiente seguro, testado, monitorado.

## ANTES DE EXECUTAR
1. Ler /evolution/deploy.md (se existir)
2. Confirmar relatorio-qa.md = APROVADO
3. Registrar início em monitor.md

## ⏸️ APROVAÇÃO HUMANA #4 obrigatória antes de executar

---

## Checklist Pré-Deploy

- [ ] QA APROVADO (relatorio-qa.md)
- [ ] Código completo e funcional
- [ ] .env de produção configurado
- [ ] APP_DEBUG=false
- [ ] SQL schema disponível
- [ ] Domínio e credenciais confirmados

---

## Ambientes de Deploy

### HOSTINGER COMPARTILHADO (Vanilla PHP)
1. hPanel → Databases → MySQL → Create (anotar host, dbname, user, pass)
2. phpMyAdmin → executar schema.sql
3. Ajustar config/database.php (localhost, u12345678_banco)
4. Upload via hPanel File Manager ou FTP
5. Testar formulário em produção com dado real
6. SSL: hPanel → Security → Force HTTPS

### RAILWAY (Laravel)
1. Deploy from GitHub Repo
2. Add MySQL Database
3. Variables: APP_KEY, APP_ENV=production, APP_DEBUG=false, DB_*
4. Start: `php artisan migrate --force && php artisan serve --port=$PORT`
5. Custom domain + SSL automático

### VPS NGINX (Laravel)
1. `git clone /var/www/projeto`
2. `composer install --no-dev --optimize-autoloader`
3. `cp .env.example .env && php artisan key:generate`
4. `php artisan migrate --force`
5. `php artisan config:cache && route:cache && view:cache`
6. `chown -R www-data:www-data` / `chmod 775 storage`
7. Nginx config: `root /var/www/projeto/public`
8. `certbot --nginx -d dominio.com`

### cPANEL (Hostgator, KingHost)
Mesmo fluxo do Hostinger, adaptando ao painel de controle específico.

---

## Pós-Deploy

- [ ] Formulário testado com dado real
- [ ] Lead aparece no banco de dados
- [ ] Pixels verificados (Pixel Helper, GA4 DebugView)
- [ ] SSL ativo + redirect HTTP→HTTPS
- [ ] Funil completo testado ponta a ponta
- [ ] Atualizar registro.md com data, ambiente, URL, SSL, status
- [ ] Atualizar /_projetos.md com URL final
- [ ] Status: **PRODUÇÃO ATIVA ✅**

## Segurança em Produção

- [ ] APP_DEBUG=false
- [ ] display_errors=Off
- [ ] .env inacessível publicamente
- [ ] APP_KEY gerado (Laravel)
- [ ] Banco com permissões mínimas

---

## Saída
- URL do site live
- registro.md atualizado
- /_projetos.md atualizado
- Otimizador Pós-Launch inicia WF-PL01
