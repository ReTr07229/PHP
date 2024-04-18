<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 4</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>

        <?php
        if (isset($_POST['submit']) && !empty($_POST['valorReais'])) {
            $realBr = $_POST['valorReais'];
            //Chamando a função da Api
            require_once "Api_Banco_Brasil.php";
            $cotacao = dolar_Com_Api_BancoBrasil();
            $conversao = $realBr / $cotacao;
            //a função abaixo: number_format(numero, nCasasDecimais, sinalCasaDecimal, sinalCasaMilhar) serve para formatar números de uma maneira muito mais automática onde são passados quatro parâmetros para ter a formatação interressada. Consultar o arquivo Aula 6.5
            //echo "<p>Seus R\$" . number_format($realBr, 2, ",", ".") . "equivalem a US\$" . number_format($conversao, 2) . "</p>";

            //Formataçõ de moedas com internacionalização
            //Aqui é usado a biblioteca php:  intl(Intenallization PHP)

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrao, $realBr, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $conversao, "USD") . "</p>";
            echo "<p><b>*Cotação baseada na Api do Banco do Brasil</b></p>";
        ?>
        <a href="javascript:history.go(-1)"><button><?= "\u{2190}" ?> Voltar</button></a>
        <?php
        } else {
            header("Location: index.php");
        }
        ?>
    </main>
</body>

</html>