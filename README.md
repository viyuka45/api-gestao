<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

<h4 align="center">
🚧  Projeto Gestor 🚀 Em construção...  🚧
</h4>

# Primeiros passos
```bash
# Clone este repositório
$ git clone https://github.com/viyuka45/api-gestao.git

#Rode o sistema
$ cd api-gestao

#Clonar o arquivo .env.exemple
$ cp .env.example .env

#Atualizar as variáveis de ambiente
APP_NAME=api-gestao
APP_URL=http://api-gestao.test

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_db
DB_USERNAME=root
DB_PASSWORD=root
-------------------------------------------------------------------
# Rodar todas as seed
$ php artisan db:seed
OU
# Rodar uma seed específica
$ php artisan db:seed --class=NomeSeeder
OU
# Apagar todas as seed e executar novamente
$ php artisan migrate:fresh --seed
-------------------------------------------------------------------
#Subir os containers no Docker
$ docker-compose up -d

#Acesse o container no Docker
$ docker-compose exec api-gestao

#Instale as dependências
$ composer install

#Gere a chave
$ php artisan key:generate

#Rode as migrations e as seeds
$ php artisan migrate --seed
```
# API aluno
- [X] Cadastrar aluno
```bash
 POST - http://127.0.0.1:8000/api/alunos   
    {
      "name": "nome do aluno",
      "email": "teste@teste.com",
      "dt_nascimento": "Y-m-d"
    }
```
- [X] Listar todos os alunos
```bash
GET - http://127.0.0.1:8000/api/alunos
```
- [X] Listar um aluno específico
- A busca pode ser feita pelo nome ou partes dele: (Patricia ou Pat)
```bash
 GET - http://127.0.0.1:8000/api/alunos/{id}
```
- [X] Update do aluno
- Os dados podem ser atualizados individualmente ou vários de uma só vez
```bash
 PUT - http://127.0.0.1:8000/api/alunos/{id}   
    {
      "name": "nome do aluno",
      "email": "teste@teste.com",
      "dt_nascimento": "Y-m-d"
    }
```

# API curso
- [X] Cadastrar curso
```bash
 POST - http://127.0.0.1:8000/api/cursos   
    {
      "titulo": "Título do curso",
      "descricao": "Descrição do curso"
    }
```
- [X] Listar todos os cursos
```bash
GET - http://127.0.0.1:8000/api/cursos
```
- [X] Listar um curso específico
- A busca pode ser feita pelo título ou partes dele: (Engenharia de Software ou Eng)
```bash
 GET - http://127.0.0.1:8000/api/cursos/{id}
```
- [X] Update do curso
- Os dados podem ser atualizados individualmente ou vários de uma só vez
```bash
 PUT - http://127.0.0.1:8000/api/cursos/{id}   
    {
      "titulo": "Título do curso",
      "descricao": "Descrição do curso"
    }
```
# API Matrícula
- [X] Cadastro de matrícula
```bash
 POST - http://127.0.0.1:8000/api/matriculas   
    {
      "name": "titulo",
      "email": "teste@teste.com",
      "dt_nascimento": "Y-m-d"
    }
```

- [X] Listar todas as matrículas
```bash
GET - http://127.0.0.1:8000/api/matriculas
```
- [X] Listar uma matrícula específica
- A busca pode ser feita pelo título ou partes dele: (Engenharia de Software ou Eng)
```bash
 GET - http://127.0.0.1:8000/api/matriculas/{id}
```
- [X] Update da matrícula
- Os dados podem ser atualizados individualmente ou vários de uma só vez
```bash
 PUT - http://127.0.0.1:8000/api/matriculas/{id}   
    {
      "name": "titulo",
      "email": "teste@teste.com",
      "dt_nascimento": "Y-m-d"
    }
```


