<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 12</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    //Consultar instruções na página 106 do caderno improvisado para estudo de T.I. - Capitulo 1(Físico)
    $segundos = $_GET['segundos'] ?? 0;

    // 1min = 60s
    // 1h = 60min ou 1h = 3600s
    // 1dia = 24h ou 1dia = 24 * 3600 = 86400s
    // 1semana = 7dias ou 1semana = 7 * 86400 = 604800

    if ($segundos != 0) {
        $numero_semanas = intdiv($segundos, 604800);
        $sobra_semana = $segundos % 604800;

        $numero_dias = intdiv($sobra_semana, 86400);
        $sobra_dias = $sobra_semana % 86400;

        $numero_horas = intdiv($sobra_dias, 3600);
        $sobra_horas = $sobra_dias % 3600;

        $numero_min = intdiv($sobra_horas, 60);
        $numero_segundos = $sobra_horas % 60;
    } else {
        $numero_semanas = 0;
        $numero_dias = 0;
        $numero_horas = 0;
        $numero_min = 0;
        $numero_segundos = 0;
    }

    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?= $segundos ?>" required>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <b><?= number_format($segundos, 0, ",", ".") ?> segundos</b> equivalem a
            uma total de:</p>
        <ul>
            <li><?= $numero_semanas ?> semanas</li>
            <li><?= $numero_dias ?> dias</li>
            <li><?= $numero_horas ?> horas</li>
            <li><?= $numero_min ?> minutos</li>
            <li><?= $numero_segundos ?> segundos</li>
        </ul>
    </section>
</body>

</html>