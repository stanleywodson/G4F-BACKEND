
# Setup Docker

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/stanleywodson/G4F-BACKEND.git
```

Caso não tenha mudado o nome do arquivo acesso
```sh
cd G4F-BACKEND/
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Suba os containers do projeto
```sh
docker compose up -d
```

Acessar o container
```sh
docker compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Gere as migrations e seeders
```sh
php artisan migrate --seed
```

Acessar o projeto
[http://localhost:8989](http://localhost:8989)

# Sem Docker

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/stanleywodson/G4F-BACKEND.git
```

Caso não tenha mudado o nome do arquivo acesso
```sh
cd G4F-BACKEND/
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Instalar as dependências do projeto
```sh
composer install
```

Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Gere as migrations e seeders
```sh
php artisan migrate --seed
```

Inicie o servidor
```sh
php artisan server
```
Acessar o projeto
[http://localhost:8000](http://localhost:8000)

# END POINTS

GET ALL 
 api/v1/news

POST   
 api/v1/news

GET ONE      
  api/v1/news/1

PUT      
 api/v1/news/1

DELETE  
 api/v1/news/1

