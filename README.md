# Sobre a API

- API de vendas para vendedores realizada em Laravel.
- Com esta API é possível fazer o Cadastro de Vendedores tendo a saída de dados do vendedor seu id, nome e e-mail.
- Buscar todos os vendedores cadastrados tendo como a saída de dados dos vendedores seu id, nome, e-mail e comissao.
- É possível fazer o Cadastro de Vendas tendo a saída de dados da venda o id, valor_venda e vendedor_id.
- Buscar todas as vendas cadastradas tendo como saída de dados de cada venda seu id, valor_venda, data_venda e vendedor_id.
- Buscar todas as vendas de um vendedor como saída de dados o vendedor_id, nome, e-mail, comissao, e todas as vendas com seu id, valor_venda, data_venda, vendedor_id.

## Endpoints da API

- No endpoint por POST (http://127.0.0.1:8000/api/vendedores/add) e passando no body da requisição nome e e-mail terá o cadastro do vendedor.
- No endpoint por GET (http://127.0.0.1:8000/api/vendedores/all) terá a busca de todos os vendedores.
- No endpoint por POST (http://127.0.0.1:8000/api/venda/add) e passando no body da requisição o valor_venda e vendedor_id terá o cadastro da venda.
- No endpoint por GET (http://127.0.0.1:8000/api/venda/all) terá a busca de todas as vendas.
- No endpoint por GET (http://127.0.0.1:8000/api/vendedores/{id}) e passando o id desejado após vendedores/ terá a busca de todas as vendas de um vendedor.

## Endpoint Web para envio de E-mail

- No endpoint (http://127.0.0.1:8000/envio-email) sendo passado na url do navegador irá ser enviado a Job para após ser executada para o envio de e-mail.

## Tecnologias Utilizadas no projeto Laravel

- PHP 8.2.4
- Laravel 10.14.1
- Migrations
- Eloquent ORM
- Queues
- Jobs

## Banco de dados utilizado

- MySQL

## Programa utilizado para testes da API

- Insomnia

## Recebimento de E-mail

- Mailtrap (https://mailtrap.io/)

## Pré-requisitos antes de utilizar o sistema

- Crie o banco de dados que se chama api_venda no seu gerenciador de banco de dados;
- Abra o terminal do computador, vá até a pasta do projeto e execute o comando: php artisan migrate, para assim criar todas as tabelas correspondentes as migrates criadas;
- Para testar as respostas das requisições foi utilizado a ferramenta Insomnia, podendo ser utilizado o Postman ou qualquer outra ferramenta que consiga fazer chamadas de requisições Rest;
- Crie as requisições no Insomnia (por exemplo) levando como base os endpoints da sessão acima "Endpoints da API" para testar as chamadas das requisições.

## Execução do Projeto

- Execute no terminal do vscode o comando: php artisan serve , para executar o projeto Laravel.

## Execução do banco de dados

- Execute o MySql no Xampp ou execute o MySql no terminal caso tenha o MySql instalado na máquina.

## Execução para o envio do e-mail

- Para envio de e-mail coloque a url http://127.0.0.1:8000/envio-email no navegador e de enter, com o comando php artisan serve sendo executado no terminal do vscode;
- Após o último passo, abra outro terminal no vscode e execute o comando: php atisan queue:work , para que assim o Worker do Laravel fique escutando a fila/queue, para assim a Job com o envio de e-mail seja executada;
- Entre no Mailtrap e veja e-mail de teste chegar na caixa de e-mails.

## Observação sobre envio do e-mail ao Mailtrap

- Foi escolhido um e-mail para uma conta padrão, para visualização da imagem do e-mail no Mailtrap olhar no final da documentação na sessão Soma das Vendas enviada no E-mail.
