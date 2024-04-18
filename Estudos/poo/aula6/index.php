<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Remoto</title>
</head>

<body>
    <?php 

    require_once  "class.php";
    //Aqui defino o número de repetições que irei utilizar, no laço de repetição mais embaixo
    $num_repeticoes = 20;

    $lgcontrol = new ControleRemoto;

    $lgcontrol->ligarTv();
    print_r($lgcontrol);
    print_r($lgcontrol->abrirMenu());
    print_r($lgcontrol->fecharMenu());
    //Aqui eu crio um laço de repetição onde inicia na posição zero 
    //onde, enquanto $i for menor que o num_repetições, o código então vai repetir a ação (maisVolume()) 
    //até terminar o número de repetições feitas
    for ($i = 0; $i < $num_repeticoes; $i++){
        $lgcontrol->maisVolume();
    }
    print_r($lgcontrol->abrirMenu());

    ?>
</body>

</html>