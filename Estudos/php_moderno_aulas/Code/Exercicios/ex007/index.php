<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais no PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
        <pre>
            <?php
            session_start(); //Essa função vai ser importante para iniciar uma nova sessão no php

            //Aqui seria a superglobal $_GET que pega as informações com base na url, sendo essas informações requeridas em string, onde o nome desse tipo de requisição é Query String
            echo '<h1>Superglobal $_GET</h1>';
            $_GET['nome'] = "Luiz";
            $_GET['idade'] = 46;
            var_dump($_GET);

            echo '<h1>Superglobal $_POST</h1>';
            var_dump($_POST);

            echo '<h1>Superglobal $_REQUEST</h1>';
            var_dump($_REQUEST);

            echo '<h1>Superglobal $_COOKIE</h1>';
            setcookie("Dia-da-Semana",  "Quarta", time() + 60 ** 2); //Aqui é um código que configura o valor dos cookies do site, onde sua duração será do tempo atual definido pelo método time() + 60**2 segundos(oque equivale 3600s exatas 24h)
            var_dump($_COOKIE);

            echo '<h1>Superglobal $_SESSION</h1>';
            $_SESSION['videogame'] = "Xbox One";
            var_dump($_SESSION);

            echo '<h1>Superglobal $_ENV</h1>';
            var_dump($_ENV); //Superglobal de Ambiente
            //No ínicio não apresenta as configurações do ambiente, mas ao usar o código a baixo, ela vai finalmente mostrar todos os dados configurados dentro do ambiente
            foreach (getenv() as $chave => $valor) {
                echo "<br>$chave -> $valor";
            }

            echo '<h1>Superglobal $_SERVER</h1>';
            var_dump($_SERVER);

            echo '<h1>Superglobal $GLOBALS</h1>';
            var_dump($GLOBALS);

            session_destroy(); //Função que serve para quebrar a sessão da página
            ?>
        </pre>
    </main>
</body>

</html>