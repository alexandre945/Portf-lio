<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('site/css/style.css')}}">
    <title>Desafio</title>
</head>

<body>

    <div class="container-sm">
    <a href=" {{route('home.index')}}">voltar</a>
                <h1>Desafios do projeto</h1>
                <p>
                    __Vou tentar resumir um pouco os desafios deste projeto porque foi o primeiro,que contruir com
                    laravel,docker,laradock
                    esperiência fantástica com docker,sem precisar, ter nada instalado na minha maquina,laradock
                    então
                    sem palavras já
                    traz muita configuração pré setada como vários banco de dados versão do php, inginx e outros,
                    servidores no caso;apesar da facilidade
                    por ser primeira vez eu demorei um pouco para conseguir setar tudo corretamente no .env do laradock
                    tem
                    expecificar a porta que vai
                    rodar cada container, servidor, banco de dados,phpmyadmin,já pode dizer o nome do database que vai
                    ser
                    criado na hora que rodar as migrate,
                    e também tem o .env do laravel;
                    Quando é criado um projeto do laravel ele já vem umas migrates por padrão, essas migrates são para
                    altenticação do laravel tela de registro e login
                    que foi a que euusei nesse projeto para autenticação do usuario;<br>
                    __O sistema M V C do Laravel Model, View, Controller, deixa o codico bem enxuto,colocando toda
                    logica no
                    controller,e Model referência a migrate
                    e o comando php artisanque neste caso é executado dentro do container do laradock,facilita muito
                    a
                    vida do desenvolvedor,
                    php artisan make: é posivel criar model,controller,diretórios,classes e umainfinadades de coisa
                    dando produtividade ,
                    o desafio maior fica por conta dos comandos a serem executados ex: uma view não carregou o erro era
                    permissão negada levei dois dias para descobrir
                    que tinha que dar o camando chmod -R 777 storage e tudo certo, outra coisa é quando muda alguma
                    configuração no AdminLTE por exemplo tem digitar
                    php artisan config:cache para pegar essas atualizacoẽs en cache,acostumar com interpolarização do
                    blade
                    no caso de uma rota por exemplo {{}} e dentro route('nome da rota')
                    se eu colocar o exemplo correto o route dentro das chaves o laravel me retorna um erro de rota
                    inexistente rs,e por falar em erros o laravel traz uma sintásse de erros bem intuitiva,
                    mostrando arqivo e até a linha que está o erro;<br>
                    __Banco de dados foi um desafio a parte até que setar o banco no .env e subir o container dele foi a
                    parte mais fácil,o poblema começa quando tem que fazer uma busca no banco 
                    de dados,porque olaravel trabalha com o orm eloquente que até facilita bastante mas no meu caso que
                    estava começando,para montar as quares foi difícil confeço.

                </p>
            
    
    </div>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>