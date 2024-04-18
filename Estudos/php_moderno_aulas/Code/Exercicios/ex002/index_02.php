<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo"); //GMT-3
    //Aqui estou chamando uma função "date()" que mostra ao usuário o dia atual do momento de execução do código
    //Acessar Arquivo de Aula 4: Primeiros Programas, na pasta php_moderno_aulas, para entender melhor como funciona essa função
    echo "<p>Hoje é dia " . date("d/m/Y") . "</p>";

    echo "<p>A hora atual é " . date("g,i:s T") . "</p>";
    ?>
</body>

</html>