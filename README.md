
# Peojeto integrador com Laravel + Docker (PHP-FPM, Nginx, Postgres)

Ambiente Laravel rodando em Docker com PHP 8.2, Nginx e Postgres 15.

---

## 🚀 Como iniciar o projeto

### 1. Subir os containers

```bash
docker compose up -d --build
```

### 2. Instalar o Laravel (somente na primeira vez)

```bash
docker compose exec app composer create-project laravel/laravel .
```

### 3. Configurar o arquivo `.env` (em backend/.env)

```env
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=sebraeintegrador
DB_USERNAME=sebraeuser
DB_PASSWORD=secret
```

### 4. Gerar a key e rodar migrations

```bash
docker compose exec app php artisan key:generate
docker compose exec app php artisan migrate
docker compose exec app chmod -R 775 storage bootstrap/cache
```

### 5. Acessar a URL via navegador

```
http://localhost:8080
```

---

## 🔧 Passo a passo neste projeto

1. Estrutura de pastas pré configuradas:

```
/backend           → Aplicação Laravel
/docker/php        → Dockerfile do PHP-FPM
/docker/nginx      → Configuração do Nginx
docker-compose.yml → Arquivo principal do ambiente
```

2. Rodar o ambiente via Docker:

```bash
docker compose up -d --build
```

3. Instalação automática do Laravel no container:

```bash
docker compose exec app composer create-project laravel/laravel .
```

4. Configuração do banco no `.env` do Laravel.  
5. Execução das migrations e geração da chave.  
6. Acesso via Nginx em http://localhost:8080.

---

## 🧯 Comandos úteis

Parar containers:
```bash
docker compose down
```

Acessar o container da aplicação:
```bash
docker compose exec app sh
```
