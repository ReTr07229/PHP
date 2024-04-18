<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 11</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php

    $preco = $_GET['preco'] ?? 0;
    $percentual = $_GET['percentual'] ?? 0;

    if ($preco != 0 and $percentual != 0) {
        $preco = (int) $preco;
        $percentual = (int) $percentual;
        $novo_preco = $preco * ($percentual / 100 + 1);
    } else {
        $novo_preco = 0;
    }

    $preco = number_format($preco, 2, ",", ".");
    $novo_preco = number_format($novo_preco, 2, ",", ".");


    ?>

    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" min="0.10" step="0.01" name="preco" id="preco" value="<?= (int) $preco ?>">
            <label for="percentual">Qual o percentual de ajuste? (<b><span id="valor_percentual"></span>%</b>)</label>
            <input type="range" min="0" step="1" max="100" oninput="mudaValor()" name="percentual" id="percentual">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$ <?= $preco ?>, com <b><?= $percentual ?>% de aumento</b> vai passar a custar
            <b>R$
                <?= $novo_preco ?></b> a
            partir de agora.
        </p>
    </section>
    <script>
        mudaValor();

        function mudaValor() {
            valor_percentual.innerText = percentual.value;
        }
    </script>
</body>

</html>