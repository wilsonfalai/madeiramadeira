1) Rodar o comando "composer install" para instalar as dependencias do projeto
2) Na raiz do projeto existe existe o arquivo  chamado db.sql
3) Rodar o server nativo do php com o comando: php -S localhost:8080 -t public/

Rotas - http://localhost:8080/

Front
* / => Home do site
* /site/view/1

Backend
* /dashboard
* /contacts => Listar Contatos
* /contact/create
* /contact/update/id
* /contact/delete/id
* /contact/view/id


O que não deu para fazer por questão de tempo?
* Autenticação / Autorização para a área administrativa
* Login
* Melhorias na base estrutural da aplicação

Sobre
* Aplicação desenvolvida em ambiante linux ubuntu
* Banco de dados mysql
* Versão 7.0 do php