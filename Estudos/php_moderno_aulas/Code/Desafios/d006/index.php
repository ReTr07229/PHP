<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 6</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    //Aqui eu atribuo o valor vindo da variavel, que corresponde ao dividendo e logo em seguida uso Operador de Fusão Null, onde verfica se a variável é nula e se for será atribuida o valor da direita.
    // $varial ?? valorSeNulo;
    $dividendo =  $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 1;


    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="Dividendo" value="0">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="Divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
        $resultado_inteiro = intdiv($dividendo, $divisor); // Retorna o valor inteiro da divisão
        //$resto_divisao = fmod($dividendo, $divisor); Função que retorna o resto da divisão
        $resto_divisao = $dividendo % $divisor; // Calculo aritmético para retornar o resto da divisão
        ?>
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto_divisao ?></td>
                <td><?= $resultado_inteiro ?></td>
            </tr>
        </table>
    </section>

</body>

</html>