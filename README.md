# Configurar o ambiente local

## Pré Requisitos 🚀

- Docker
- Git

## Como subir o ambiente local ⚙️

1. Executar o comando para clonar o repositório do backend.

```bash
- git clone https://github.com/matheus85/oportunidades-back.git
```

2. Dentro da pasta criada para o projeto executar o docker-compose.
```bash
- docker-compose up -d --build
```

3. Executar o migrate para gerar o banco de dados.
```bash
- docker-compose exec app php artisan migrate --seed
```

# Endereço da API.
```
- http://localhost:82
```

# Documentação - Swagger.
```
- http://localhost:82/api/documentation
```
