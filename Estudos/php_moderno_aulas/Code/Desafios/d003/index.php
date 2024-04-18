<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 3</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>

        <form action="conversor.php" method="post">
            <label for="valorReais">Quantos R$ você tem na carteira?</label>
            <!-- Perceba que no input abaixo existe um atributo step="0.01", este atributo garante que o input aceite números decimais-->
            <input type="number" step="0.01" name="valorReais" id="valorReais" required>
            <input type="submit" name="submit" id="submit" value="Converter">
        </form>
    </main>
</body>

</html>