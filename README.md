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
> $ docker exec -it desafio.php composer install
```

Em seguida crie o arquivo .env baseado no exemplo
```sh
> $ docker exec -it desafio.php cp .env.example .env
```

Por último rode os migration para criar a base inicial
```sh
> $ docker exec -it desafio.php vendor/bin/phinx migrate
```

Agora você deve ser capaz de visitar a página da aplicação http://localhost/ e começar a usar o sistema

## Objetivo

Essa API permite buscar por raças de gato, ela consulta a api externa https://docs.thecatapi.com e faz cache em um banco MySQL com o resultado, caso tenha uma raça de gato no banco MySQL a consulta não é feita para a API

## Endpoints
- `POST login`, fazer o login no sistema
- `GET breeds`, buscar uma raça
 
Para mais detalhe visite a documentação completa https://documenter.getpostman.com/view/1472725/TW6tMVtC

## TODO
- Criar a documentação da API em Markdown
- Melhorar o Docker para ele executar todas as dependências do ambiente, sendo necessário apenas um comando para criar o ambiente
- Implementar Testes
