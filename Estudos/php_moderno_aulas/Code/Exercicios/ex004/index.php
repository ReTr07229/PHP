<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    //Sequência de escape em php, serve para representar caracteres especiais dentro de strings

    $nome = "Rodrigo";
    $sobrenome = "Nogueira";

    echo "<p>$nome \"Minotauro\" $sobrenome</p>";

    echo "<p>Olá, meu nome é João\n</p>";
    echo "<p>Eu gosto de programar em PHP\r</p>";
    echo '<p>Eu gosto de programar em PHP</p>';
    echo "<p>\\Eu gosto de programar em PHP\\</p>";
    echo "<p>\$100</p>";
    echo "<p>\{100\}</p>";
    echo "<p>\[100\]</p>";
    echo "<p>\(100\)</p>";
    echo "<p>\tEu gosto de programar em PHP</p>";
    echo "<p>\vEu gosto de programar em PHP</p>";
    echo "<p>\x41</p>"; // A letra 'A'
    echo "<p>\0</p>"; // Caractere nulo


    ?>
</body>

</html>