<?php

$produtos = ["Nintendo Switch" => 2000, "Nintendo Switch OLED" => 2500, "PS5" => 7000, "Xbox Series X" => 6000];

foreach ($produtos as $nome => $produto){
    if ($produto > 5000){
        $produtos[$nome] = $produto * (1 + 0.05);
    }
    elseif ($produto < 5000){
        $produtos[$nome] = $produto * (1 + 0.1);
    }
} 

var_dump($produtos);
?>