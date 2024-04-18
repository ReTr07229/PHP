<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 13</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php

    $saque = $_GET['saque'] ?? 0;

    if ($saque != 0) {
        $nota_100 = (int)($saque / 100);
        $sobra_100 = $saque % 100;

        $nota_50 = (int)($sobra_100 / 50);
        $sobra_50 = $sobra_100 % 50;

        $nota_10 = (int)($sobra_50 / 10);
        $sobra_10 = $sobra_50 % 10;

        $nota_5 = (int)($sobra_10 / 5);
    } else {
        $nota_100 = 0;
        $nota_50 = 0;
        $nota_10 = 0;
        $nota_5 = 0;
    }

    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual valor deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" value="<?= $saque ?>" required>
            <p style="font-size: 0.6em;"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10, R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de R$<?= number_format($saque, 2, ",", ".") ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <!-- Estilizar o tamanho das notas -->
            <li><img class="nota" src="100RS.jpg" alt="Nota R$100">x<?= $nota_100 ?></li>
            <li><img class="nota" src="50RS.jpg" alt="Nota R$50">x<?= $nota_50 ?></li>
            <li><img class="nota" src="10RS.png" alt="Nota R$10">x<?= $nota_10 ?></li>
            <li><img class="nota" src="5RS.png" alt="Nota R$5">x<?= $nota_5 ?></li>
        </ul>
    </section>
</body>

</html>