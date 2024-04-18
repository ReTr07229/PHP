<!-- Essa linha serve para declarar o html com a última versão já lançada-->
<!DOCTYPE html>
<!-- Essa declara que a nossa página é uma página pt-br, oq ajuda a outros algoritmos que procuram sites por localização vizualizar a página-->
<html lang="pt-br">


<head>
    <!-- Aqui faz com que o código aceite o tipo e versão de caractere UTF-8, oque ajuda a aceitar acentuação-->
    <meta charset="UTF-8">
    <!-- Aqui comanda para que o ponto de visão ocupe toda a tela de qualquer monitor, na escala 1.0-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo Exercício</title>
</head>

<body>
    <h1>Dados do Servidor</h1>
    <?php
    //Aqui eu chamo um método "phpinfo()" que apresenta todos os dados do servidor, que está rodando esse código
    //Sendo muito úitl para fazer conexão com o banco de dados
    phpinfo();
    ?>
</body>

</html>