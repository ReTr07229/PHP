<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $numero = $_GET['numero'] ?? 1;
    //Aqui é onde calculamos as raízes
    $raiz_quadrada = $numero ** (1 / 2);
    $raiz_quadrada = number_format($raiz_quadrada, 3, ',', '.');

    $raiz_cubica = $numero ** (1 / 3);
    $raiz_cubica = number_format($raiz_cubica, 3, ',', '.')
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?= $numero ?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <main>
        <h2>Resultado Final</h2>
        <p>Analisando o <strong>número <?= $numero ?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?= $raiz_quadrada ?></strong></li>
            <li>A sua raiz cúbica é <strong><?= $raiz_cubica ?></strong></li>
        </ul>
    </main>
</body>

</html>