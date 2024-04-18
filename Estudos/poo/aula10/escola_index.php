<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola</title>
</head>

<body>
    <?php
    require_once "classe_Aluno.php";

    $aluno1 = new Aluno("João", 16, "Masculino", 165485554, "Informática");
    print_r($aluno1);
    $aluno1->cancelMatr();
    print_r($aluno1->getMatr());
    ?>
</body>

</html>