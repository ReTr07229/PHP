<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 10</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php

    date_default_timezone_set("America/Sao_Paulo");

    $ano_atual = date("Y");

    $ano_nascimento = $_GET['nascimento'] ?? 2000;

    $ano_previsto = $_GET['previsto'] ?? $ano_atual;

    $idade_prevista = $ano_previsto - $ano_nascimento;

    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" value="<?= $ano_nascimento ?>">
            <label for="previsao">Quer saber sua idade em que ano? (atualmente estamos
                em<b><?= $ano_atual ?></b>)</label>
            <input type="number" name="previsto" id="previsto" value="<?= $ano_previsto ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p> Quem nasceu em <?= $ano_nascimento ?> vai ter <b><?= $idade_prevista ?> anos</b> em <?= $ano_previsto ?>!
        </p>
    </section>
</body>

</html>