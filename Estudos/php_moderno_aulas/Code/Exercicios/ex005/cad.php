<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h1>Resultados de Processamento</h1>
    </header>
    <main>
        <?php

        if (isset($_POST['submit']) && isset($_POST['nome']) && isset($_POST['$sobrenome'])) {

            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];

            echo "<p>Bem vindo $nome $sobrenome!</p>";
            var_dump($_POST);
        ?><p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
        <?php
        } else {
            header("Location: form.php");
        }

        ?>

    </main>
</body>

</html>