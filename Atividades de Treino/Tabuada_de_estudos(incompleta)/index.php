<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tabuadas para estudo</title>
</head>
<body>
    <?php
        $limite = $_GET['limite'] ?? 0;
        require_once "functions.php";
    ?>
    <main>
        <h1>Tabuadas de Estudo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="limite">Quer estudar até qual tabuada?</label>
            <input type="number" name="limite" id="limite" placeholder="Número tabuada" value="<?= $limite ?>" required>
            <input type="submit" value="Exibir Tabuadas">
        </form>
    </main>
    <section>
       <?php 
        exibirTabuadas($limite);
       ?>
    </section>
</body>
</html>