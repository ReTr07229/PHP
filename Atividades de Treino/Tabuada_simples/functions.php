<?php 

//Aqui eu crio uma função que fará a tabuada por completo com base no parâmetro $input que simboliza o valor que foi enviado pelo
function fazerTabuada($input){
    if ($input != 0){
        echo "<h3>Tabuada do $input</h3>";
        //Abro a tabela
        echo "<table border=\"2\">";
        for($i = 1; $i <= 10; $i++){
            echo "<tr>";
            echo "<td>$input x $i = " . $input*$i . "</td>";
            echo "</tr>";
        }
        //Fecho a tabela
        echo "</table>";
    }
    else{
        echo "<p>Número da Tabuada <b>não selecionado</b></p>";
    }
}
?>