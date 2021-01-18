## Tecnologias
- MySQL 8 (https://www.mysql.com/)
- PHP 7.4 (https://www.php.net/)
- Docker (https://www.docker.com/)
- Nginx (https://www.nginx.com/)
- Slim Framework (https://www.slimframework.com/)
## Instalação
Você pode rodar esse projeto usando o [Docker Compose](https://docs.docker.com/compose/install/).
```sh
$ docker-compose up  -d
```
Para instalar as dependências da aplicação será necessário executar o `composer install`, isso pode ser feito dentro do container PHP.
```sh
> $ docker exec -it desafio.php sh
/var/www/html > $ composer install
```

Agora você deve ser capaz de visitar a página da aplicação http://localhost/ e começar a usar o sistema
## Endpoints
- ...

 


