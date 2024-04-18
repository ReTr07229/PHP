<?php

function exibirTabuadas($input){
    if ($input != 0){
        //Criando tabela
        echo "<table border=\"2\">";
        $multiplicador = 2;
        while ($multiplicador <= $input){
            echo "<td>";
            for ($i = 1; $i <= 10; $i++){
                echo "<p>$multiplicador x $i = " . $multiplicador*$i . "</p>";
            }
            echo "</td>";
            $multiplicador++;
    }
        //Fechando tabela
        echo "</table>";
    }
    else{
        echo "<p>Nenhum número foi selecionado...</p>";
    }
}

//Receber o número final da ordem das tabuadas

?>