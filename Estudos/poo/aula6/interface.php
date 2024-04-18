<?php 

interface  Controlador{//classe segue o modelo de PascalCase
    //Métodos Abstratos
    public function ligarTv();//método segue o modelo de camelCase

    public function desligarTv();

    public function abrirMenu();

    public function fecharMenu();

    public function maisVolume();

    public function menosVolume();

    public function ligarMudo();

    public function desligarMudo();

    public function play();
    
    public function pause();
}


?>