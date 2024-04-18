<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type+="text/css" href="style.css">
    <title>Desafio PHP 01</title>
</head>

<body>
    <header>
        <h1>Informe um número</h1>
    </header>
    <main>
        <label for="numero">Digite um número:</label>
        <form action="resposta.php" method="post">
            <input type="number" name="numero" id="idnumero" placeholder="Digite aqui o número" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>

</html>