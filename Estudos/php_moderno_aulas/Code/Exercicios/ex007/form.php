<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário pro $_POST</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
        <!--Neste caso a ação está enviando usando o método POST, mesclado com o GET, códigos após ?-->
        <form action="index.php?inteligencia=on&QI=149" method="post">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome">

            <label for="idade">Idade: </label>
            <input type="number" name="idade" id="idade">

            <input type="submit" name="submit" id="submit" value="Enviar">
        </form>
    </main>
</body>

</html>