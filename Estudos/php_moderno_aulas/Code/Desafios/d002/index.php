<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Desafio PHP 02</title>
</head>

<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php

        echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
        //A função rand(valor1, valor2) gera um número aleátorio entre valor1 e valor2 
        $numAleatorio = rand(0, 100);

        echo "<p>O valor gerado foi <b>$numAleatorio</b></p>";
        ?>
        <a href="javascript:history.go(0)"><button><?= "\u{21BB}" ?> Gerar Outro</button></a>
    </main>
</body>

</html>