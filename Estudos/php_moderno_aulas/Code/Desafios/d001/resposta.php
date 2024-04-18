<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Desafio PHP 01.2</title>
</head>

<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php

        $numero = $_POST['numero'];

        echo "<p>O número escolhido foi <b>$numero</b></p>";
        echo "<p>O seu antecessor é " . ($numero - 1) . "</p>";
        echo  "<p>O seu sucessor é " . ($numero + 1) . "</p>";
        ?>
        <button onclick="javascript:history.go(-1)"><?= "\u{2190}" ?> Voltar</button>
    </main>
</body>

</html>