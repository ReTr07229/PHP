<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 9</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    require_once "backend.php";
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?= $valor_1 ?>" required>
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso_1 ?>" required>
            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?= $valor_2 ?>" required>
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso_2 ?>" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo as médias</h2>

        <p>Analisando os valores <?= $valor_1 ?> e <?= $valor_2 ?>:</p>

        <ul>
            <li>A <b>Média Aritmética Simples</b> entre os valores é igual a <?= $media_simples ?></li>
            <li>A <b>Média Aritmética Ponderada</b> com peso <?= $peso_1 ?> e <?= $peso_2 ?> é igual a
                <?= $media_ponderada ?></li>
        </ul>
    </section>
</body>

</html>