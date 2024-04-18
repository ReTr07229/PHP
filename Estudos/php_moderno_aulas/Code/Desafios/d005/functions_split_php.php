<?php
//Aqui gero uma função para realizar a tarefa de separar o inteiro do decimal
function separador_Inteiro($valor)
{
    //Aqui tranformo o $valor em string para poder usar o método(explode("caractere",$variavel)) que separa strings com base em um caractere escolhido, tranformando ela em array
    $str = (string) $valor;
    $splitted = explode(".", $str);
    //Aqui eu armazeno o valor do item 0 da lista dentro da variavel $splitted, onde esse item se equivaleria como o número inteiro, lembrando que como o item estava em string foi necessário converte-lo para int, para não haver problemas na manipulação desse valor.
    $inteiro = (int)$splitted[0];
    return $inteiro;
}

function separador_Decimal($valor)
{
    $str = (string) $valor;
    $splitted = explode(".", $str);
    //Mesmo processo aqui, porém agora irei armazenar o item que teria o valor da parte decimal do número, dentro da variavel $decimal, sempre convertento o valor para int
    $decimal = (int)$splitted[1];
    return $decimal;
}
