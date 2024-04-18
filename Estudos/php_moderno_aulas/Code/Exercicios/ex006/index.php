<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressões Aritméticas</title>
</head>

<body>
    <?php

    //Funções Aritiméticas

    //abs(valor) mostra qual é o valor absoluto do resultado/valor númerico

    //base_convert(valor, base_atual, base_p/_conversao) serve para converter a base de um valor inserido, indo de binário = 2, octal = 8, decimal = 10 e hexadecimal = 16

    //ceil(valor) arredonda um valor para cima, floor(valor) arredonda um valor para baixo, round(valor) arrendonda um valor de forma aritmética

    //hypot(cat, cat) calcula a hipotenusa kkkkk

    //intdiv(valor/valor) mostra o valor inteiro de uma divisão, sem ser real, por exemplo 2.5(real) = 2(inteiro), podendo usar também % como operador(5 % 2 = 2)

    //min(lista de valores) mostra o menor valor dentro da lista, max(lista de valores) mostra o maior valor dentro da lista

    //pi() mostra o valor de pi

    // sin(), cos(), tan() consecutivamente seno, cosseno e tangente

    //sqrt(valor) calcula a raiz quadrada do valor

    echo  abs(-9);
    echo "<br>";
    echo base_convert(25, 10, 2);
    echo "<br>";
    echo ceil(2.47777777779);
    echo "<br>";
    echo floor(2.47777777779);
    echo "<br>";
    echo round(2.47777777779);
    echo "<br>";



    echo "<br>";


    ?>
</body>

</html>