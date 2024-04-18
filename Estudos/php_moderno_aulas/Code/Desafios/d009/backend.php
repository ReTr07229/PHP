<?php
$valor_1 = $_GET['valor1'] ?? 0;
$valor_2 = $_GET['valor2'] ?? 0;
$peso_1 = $_GET['peso1'] ?? 0;
$peso_2 = $_GET['peso2'] ?? 0;

$valores = [$valor_1, $valor_2, $peso_1, $peso_2];

$tem_zero = false;

function mediaSimples($valor1, $valor2)
{
    $soma = $valor1 + $valor2;
    $media_s = $soma / 2;
    return number_format($media_s, 2, ",", ".");
}

function mediaPonderada($valor1, $valor2, $peso1, $peso2)
{
    $calculo = $peso1 * $valor1 + $peso2 * $valor2;
    $divisor = $peso1 + $peso2;
    $media_p = $calculo / $divisor;
    return number_format($media_p, 2, ",", ".");
}

foreach ($valores as $valor) {
    if ($valor === 0) {
        $tem_zero = true;
        break;
    }
}

if ($tem_zero === false) {
    $media_simples = mediaSimples($valor_1, $valor_2);

    $media_ponderada = mediaPonderada($valor_1, $valor_2, $peso_1, $peso_2);
} else {
    $media_simples = 0;

    $media_ponderada = 0;
}