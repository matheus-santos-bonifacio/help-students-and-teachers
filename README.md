# Help Students and Teachers

## An app capable of taking it to the next level

Principalmente durante a pandemia podemos ver que nem alunos, e nem professores conseguiram se adaptar muito bem a quarentena, principalmente quando falamos de escolas ou cursos que não apresentam tantos recursos. Podemos listar aqui uma série de motivos que levaram a isso, mas poderiamos levar o dia inteiro aqui, por isso iremos listar alguns entre eles, e também alguns que estão mesmo presentes até mesmo antes da pandemia:

-   falta de comunicação entre professor e aluno
-   falta de interação entre aluno e aluno (principalmente quando os alunos não se conhecem)
-   falta de emulação de um ambiente de trabalho real
-   "preguiça" causada por ficar "aconchegado"
-   dificuldade com tecnologias novas, e dentro temos dois motivos:
-   falta de facilidade
-   falta de recursos
-   aparelhos com pouco recurso, não podendo exigir tanto

Esse e outros motivos causaram o vemos quando professores vão lidar com tecnologia atualmente. Assim esse site vem com o objetivo de ajudar na maioria desses problemas, sendo fácil de usar, rápido, por não precisar de instação, e entre muitos outros motivos que vai levar o aluno e professor para o próximo nível.

## Requisitos

-   PHP >= 8.0
-   Composer >= 2.0.7

-   Mysql >= 8.0.23

ou

-   Docker >= 20.10.5
-   docker-compose >= 1.28.3

## Tecnologias usadas

-   PHP
-   Laravel
-   Composer
-   Docker

## Inicialização

### Instalação

```
composer install
```

### Configuração

Copie o arquivo `.env.example` e nomei `.env` e mude as seguintes informações caso use mysql, configure os seguintes campos de acordo com o seu banco:

```
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Caso vá usar Docker é só seguir adiante que a própria configuração já automática.

### Inicialização

#### Banco com Docker

Na raiz do projeto:

```
docker-compose --profile database up
```

#### Projeto Laravel

Na raiz do projeto:

```
php artisan serve
```
