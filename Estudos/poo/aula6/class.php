<?php 

//Ao implementar uma classe com uma interface é necessário fazer um requerimento único
require_once "interface.php";
//Aqui estou implementando(ou seja herdando) a classe controlador dentro de Controle remoto
//Fazendo controle remoto receber todos os atributos e métodos dentro da classe Controlador
class ControleRemoto implements Controlador{
    private int $volume;//atributo segue o modelo de snake_case
    private bool $ligado;
    private bool $tocando;

    public function __construct(){//Aqui faço um construtor que obriga toda vez que for instaciado um objeto esses serão os valores padrão
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    //Aqui defino todas os métodos abstratos dentro da interface.php
    //Métodos abstratos == Método dentro de uma interface estando vazio
    public function ligarTv(){
        $this->setLigado(True);
    }

    public function desligarTv(){
        $this->setLigado(False);
    }

    public function abrirMenu(){
        //Aqui eu exibo uma mensagem que faz uma pergunta se está ou não ligado, o controle
        //com o $this ele chama o método que consulta essa informação e o ? funciona como um if($this->getTocando() == true)
        //e o : como else
        echo "<br>Está Ligado? " .($this->getLigado()?"Sim":"Não");
        echo "<br>Está Tocando? " .($this->getTocando()?"Sim":"Não");
        echo "<br>Volume: " .($this->getVolume());
        //A lógica daqui é, eu defino que $i começa por zero, onde define que $i pode ser menor ou igual ao método que consulta o Volume
        //onde o valor de $i é icrementado de 10 em 10 de acordo com o valor consultado por getVolume()
        for($i = 0; $i <= $this->getVolume(); $i += 10){
            print_r("|");
        }
        echo "<br>";
       
    }

    public function fecharMenu(){
        print_r("Fechando Menu...");
    }

    public function maisVolume(){
        //Aqui verfica se a function getLigado() é verdadeiro
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 1);
        }
        else {
            echo "<p> Não posso aumentar Volume!</p>";
        }
    }

    public function menosVolume(){
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() - 1);
        }
        else {
            echo "<p> Não posso diminuir Volume!</p>";
        }
    }

    public function ligarMudo(){
        if ($this->getLigado() and $this->getVolume() > 0){
            $this->setVolume(0);
        }
    }

    public function desligarMudo(){
        if ($this->getLigado() && $this->getVolume() == 0){
            $this->setVolume(50);
        }
    }

    public function play(){
        if ($this->getLigado() && $this->getTocando() == false){
            $this->setTocando(true);
        }
    }

    public function pause(){
        if ($this->getLigado() && $this->getTocando() == true){
            $this->setTocando(false);
        }
    }


    private function getVolume(){
        return $this->volume;
    }

    private function setVolume($v){
        $this->volume = $v;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function setLigado($l){
        $this->ligado = $l;
    }

    private function getTocando(){
        return $this->tocando;
    }

    private function setTocando($t){
        $this->tocando = $t;
    }
}

?>