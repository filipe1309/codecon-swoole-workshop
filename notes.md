# Notes

> notes taken during the workshop

<!-- https://gitignore.io -->
<!-- https://github.com/github/gitignore -->

## Intro

Swoole -> epoll

php --ri swoole
time php php_normal.php // 3s
time php php_swoole.php // 1s

## Server

php server_swoole.php 
curl localhost:8080
curl localhost:8080/tralala

## Frameworks

### Laravel
Laravel-Swoole
Laravel Octane = nao funciona com coroutines, mas da pra usar com o novo "concurrency mode"

### Hyperf
hyperf.io
- to microservices
https://hyperf.wiki/2.2/#/

https://hub.docker.com/_/mysql

```sh
docker run --rm -v $(pwd):/app -it --entrypoint sh hyperf/hyperf:7.4-alpine-v3.12-swoole-v4.7

cd app
composer create hyperf/hyperf-skeleton .
Timezone = America/Sao_Paulo
hyperf/async-queue yes
hyperf/amqp yes

docker-compose up --build

# To horizontal scale swoole with many kubernetes pods
config/server.php
SWOOLE_PROCESS -> SWOOLE_BASE
OPTION_WORKER_NUM -> 1

curl localhost:9501
curl "http://localhost:9501?user=Filipe"
```

#### Watcher

```
docker-compose exec app sh

opt/www
composer req --dev hyperf/watcher
php bin/hyperf.php vendor:publish hyperf/watcher // criar config/autoload/watcher.php 

docker-compose up --build

yasd dockerfile, watcher.php
docker-compose up --build
```

#### Middleware

```sh
➜  hyperf docker-compose exec app sh
php bin/hyperf.php gen:middleware TesteMiddleware
```

Marco Pivetta - Talk From Helpers to Middlewares

Nano hyperf -> Tipo o Lumen do Laravel

#### Command

```sh
/opt/www # php bin/hyperf.php gen:command TesteComman
d
/opt/www # php bin/hyperf.php list
/opt/www # php bin/hyperf.php teste:command
```

#### Next
- Set debuger, ex Yasd https://github.com/swoole/yasd
- Set database
- Set queue
