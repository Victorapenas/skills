---
name: deploy
description: >
  Ative esta skill para fazer o deploy da landing page em produção.
  Use quando o usuário pedir "publicar", "fazer deploy", "subir para produção",
  "colocar no ar", ou após o QA estar aprovado. REQUER QA APROVADO ANTES.
---

# Agente de Deploy — PHP Landing Page Factory

## PRÉ-REQUISITO OBRIGATÓRIO

**ANTES DE QUALQUER AÇÃO:**
Verificar se `/projetos/[nome]/output/relatorio-qa.md` existe e contém:
`Resultado Geral: APROVADO` ou `Resultado Geral: APROVADO COM AJUSTES`

**Se QA não aprovado → RECUSAR deploy:**
> "O QA deste projeto ainda não foi aprovado.
> Execute `@skill qa` antes de prosseguir com o deploy."

---

## Verificações Pré-Deploy — Antes de Qualquer Upload
1. Versão do PHP do destino confere com a local?
2. .htaccess bloqueando acesso a `/config` ou `.env` está presente?
3. Permissões de pasta de cache (storage) estão em 775?
4. Extensões PDO e cURL estão ativas no destino?
5. Faça um plano de rollback antes de apertar o botão.

---

## Checklist Pré-Deploy Obrigatório

- [ ] Relatório de QA: APROVADO
- [ ] Código em `/projetos/[nome]/output/code/` completo
- [ ] META_PIXEL_ID e GA4_ID devidamente preenchidos no .env caso o projeto envolva tráfego pago
- [ ] `.env.example` preenchido com todas as variáveis
- [ ] SQL documentado
- [ ] Domínio definido e apontado
- [ ] Credenciais de acesso ao servidor disponíveis
- [ ] SSL/HTTPS disponível

---

## AMBIENTE 1 — Hostinger Compartilhado (Vanilla PHP)

**Melhor para:** LP simples, formulário básico, hospedagem existente

### Passo a Passo:
1. **BANCO:** hPanel → Databases → MySQL → Create Database → phpMyAdmin → executar schema.sql
2. **CREDENCIAIS:** Editar config/database.php com dados reais (host geralmente localhost)
3. **UPLOAD:** hPanel File Manager ou FTP (FileZilla) → public_html/
4. **HTTPS:** hPanel → Security → SSL/TLS → Force HTTPS → Enable
5. **TESTAR:** Acessar URL no celular → preencher form → verificar banco via phpMyAdmin → verificar pixel e GA4

---

## AMBIENTE 2 — Railway (Laravel)

**Melhor para:** Projetos Laravel, deploy rápido via GitHub

### Passo a Passo:
1. **REPO:** git init → push para GitHub
2. **RAILWAY:** New Project → Deploy from GitHub Repo
3. **BANCO:** + New → Database → MySQL (variáveis automáticas)
4. **ENV:** Configurar APP_KEY, APP_ENV=production, APP_DEBUG=false, DB_*, pixels
5. **START:** `php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=$PORT`
6. **DOMÍNIO:** Settings → Custom Domain → CNAME no DNS
7. **TESTAR:** Acessar URL → testar formulário → verificar banco

---

## AMBIENTE 3 — VPS com Nginx (Laravel avançado)

**Melhor para:** Projetos complexos com maior controle

### Passo a Passo:
1. SSH no servidor
2. Instalar: nginx, php8.3-fpm, php8.3-mysql, mysql-server, git, composer, certbot
3. Clonar repo em /var/www/projeto
4. composer install --no-dev --optimize-autoloader
5. Configurar .env
6. php artisan key:generate, migrate, config:cache, route:cache, view:cache
7. Permissões: www-data, 755/775 storage e bootstrap/cache
8. Configurar Nginx (server block com try_files, fastcgi_pass)
9. ln -s sites-available → sites-enabled, nginx -t, reload
10. SSL via certbot --nginx
11. Testar em produção

---

## Passo Final — Registrar o Deploy

Atualizar `/projetos/[nome]/registro.md`:

```
## Deploy em Produção
- **Data e hora:** [data]
- **Ambiente:** [Hostinger / Railway / VPS]
- **URL de produção:** [URL]
- **SSL ativo:** Sim
- **HTTPS forçado:** Sim
- **Formulário testado:** Sim — [data]
- **Lead de teste registrado:** Sim
- **Pixel disparando:** [Sim / Não configurado]
- **GA4 registrando:** [Sim / Não configurado]
- **Status:** ✅ PRODUÇÃO ATIVA

## Histórico de Deploy
[data] - Deploy inicial em [ambiente] — [responsável]
```

---

## Regras de Segurança em Produção

- [ ] APP_DEBUG=false
- [ ] display_errors=Off
- [ ] .env não acessível via navegador (testar: seudominio.com/.env → 403/404)
- [ ] APP_KEY gerado e único
- [ ] Banco com usuário de permissões mínimas (não root)
- [ ] Backup automático (se VPS)
- [ ] SSL válido com renovação automática

---

## Mensagem Final ao Usuário

```
✅ Deploy concluído com sucesso!
🌐 URL de produção: [URL]
🔒 SSL ativo: Sim
📋 Formulário testado: Sim
📊 Lead de teste: Registrado no banco
📁 Documentação atualizada em: /projetos/[nome]/registro.md
Projeto finalizado e em produção. 🚀
```


## Ao Concluir Esta Etapa
Atualize o contexto-projeto.md:
- Marque esta etapa como concluída com a data
- Registre decisões tomadas na seção "Decisões Tomadas"
- Informe a próxima etapa no campo "Próxima etapa"
