<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
        <?php
        //Caso dúvida, consulte o documento Desafio 7: Explicações do exércicio 7, dentro da pasta anotações
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $salario_minimo = 1380.60;

        $salario_inserido = $_GET['salario'] ?? 0;

        if ($salario_inserido != 0) {

            $valores_inteiros = intdiv($salario_inserido, $salario_minimo);

            //Esse é o calculo que descobre o resto da divisão
            $resto_salario = $salario_inserido % $salario_minimo;
        } else {
            $valores_inteiros = 0;

            $resto_salario = 0;
        }
        // Formatando os números
        $salario_minimo = numfmt_format_currency($padrao, $salario_minimo, "BRL");

        $salario_inserido = numfmt_format_currency($padrao, $salario_inserido, "BRL");

        $resto_salario = numfmt_format_currency($padrao, $resto_salario, "BRL");
        ?>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?= $salario_inserido ?>">
            <p>Considerando o salário mínimo de <b><?= $salario_minimo ?></b></p>
            <input type="submit" value="Enviar">
        </form>
    </main>
    <main>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de <?= $salario_inserido ?> ganha <b><?= $valores_inteiros ?> salários mínimos </b>+
            <?= $resto_salario ?>.
        </p>
    </main>
</body>

</html>