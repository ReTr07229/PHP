<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números hexa, octa e binário</title>
</head>

<body>
    <h1>Tipos primitivos</h1>
    <pre>
    <?php
    // 0x = hexadecimal, 0b = binário, 0 = Octal
    $num_hexa = 0x1A;
    $num_binary = 0b1011;
    $num_octal = 010;

    echo "<h3>Esse é um número em hexadecimal: $num_hexa</h3>";
    echo "<h3>Esse é um número em binário: $num_binary</h3>";
    echo "<h3>Esse é um número em octal: $num_octal</h3>";

    $int_text = (int) "950";

    $string_boorlean = (string) true; //0 = false/null/void, 1 = true;

    $bool_text = (bool) "True";

    $float_number = (float) 950;

    $array = [5, 6, true, 8.9, "luiz"];

    class Pessoa
    {

        public string $nome;
    }

    $object = new Pessoa();

    $callable = function ($nome) {
        echo "Olá, " . $nome . "!";
    };

    //$callable('João'); // Saída: "Olá, João!"

    var_dump($int_text);
    echo "<p></p>";

    var_dump($string_boorlean);
    echo "<p></p>";

    var_dump($bool_text);
    echo "<p></p>";

    var_dump($float_number);
    echo "<p></p>";

    var_dump($array);
    echo "<p></p>";

    var_dump($object);
    echo "<p></p>";

    var_dump($callable);
    echo "<p></p>";
    ?>
    </pre>
</body>

</html>