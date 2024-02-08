
# Setup Docker Laravel 10 com PHP 8.1

```
```sh
cd app-laravel
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=EspecializaTi
APP_URL=http://localhost:8989

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acesse o container app
```sh
docker-compose exec app bash
```


Instale as dependências do projeto
```sh
composer install
```


Gere a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8989](http://localhost:8989)

Tradudizir Laravel

1. Scaffold do diretório lang
 ```sh
    php artisan lang:publish
 ```
2. Instale o pacote
```sh
   composer require lucascudo/laravel-pt-br-localization --dev
```
3. Publique as traduções
```sh
   php artisan vendor:publish --tag=laravel-pt-br-localization
```
4. Configure o Framework para utilizar 'pt_BR' como linguagem padrão
// Altere Linha 85 do arquivo config/app.php para:
```sh
   'locale' => 'pt_BR'
```

Tabelas

1. Usando tablas rappasoft
 ```sh
    composer require rappasoft/laravel-livewire-tables
 ```
