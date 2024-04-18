<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <h1>Apresente-se a nós</h1>
    </header>
    <form action="cad.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="idnome" placeholder="Digite seu nome aqui" required>
        <label for="sobrenome">Sobrenome: </label>
        <input type="text" name="sobrenome" id="idsobrenome" placeholder="Digite seu sobrenome aqui" required>
        <input type="submit" name="submit" placeholder="Enviar">
    </form>
</body>

</html>