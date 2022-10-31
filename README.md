# Configurar o ambiente local

## Pré Requisitos 🚀

- Docker
- Git

## Como subir o ambiente local ⚙️

```bash
git clone https://github.com/matheus85/oportunidades-back.git
```

```bash
cd oportunidades-back
```

```bash
docker-compose up -d --build
```

```bash
docker-compose exec app composer install
```

```bash
docker-compose exec app cp .env.example .env
```

```bash
docker-compose exec app php artisan key:generate
```

```bash
docker-compose exec app php artisan migrate --seed
```

*** Caso apresente erro de permissão rodar o comando abaixo
```bash
docker-compose exec app chmod 777 -R /var/www
```

# Para acessar
```
http://localhost:82
```

# Documentação - Swagger.
```
http://localhost:82/api/documentation
```
