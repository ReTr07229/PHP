<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php
        $numero = $_GET['numero'] ?? 0;
    ?>
    <main>
        <h1>Desafio Tabuada</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="numero">Digite o número da tabuada que você deseja:</label>
        <input type="number" name="numero" id="numero" step="0.01" value="<?= $numero ?>" required>
        <input type="submit" value="Calcular Tabuada">
        </form>
    </main>
    <section>
        <?php
            require_once "functions.php";
            fazerTabuada($numero);
        ?>
    </section>
</body>
</html>