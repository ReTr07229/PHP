<?php 

// chamar essa função no início do código php do arquivo conversor.php do desafio 4
function dolar_Com_Api_BancoBrasil(){
$inicio = date("m-d-Y" , strtotime("-7 days"));
$fim = date("m-d-Y");

$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

//var_dump($dados);

$cotacao = $dados["value"][0]["cotacaoCompra"];

return $cotacao;
}
?>