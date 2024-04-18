<?php 

require_once "class_Lutador.php";
class Luta{
//Atributos
    private $desafiado, $desafiante;
    private int $rounds;
    private bool $aprovada;

//Métodos Especiais
    public function getDesafiado(){
        return $this->desafiado;
    }

    public function setDesafiado($dd){
        $this->desafiado = $dd;
    }

    public function getDesafiante(){
        return $this->desafiante;
    }

    public function setDesafinte($dt){
        $this->desafiante = $dt;
    }

    public function getRounds(){
        return $this->rounds;
    }

    public function setRounds($r){
        $this->rounds = $r;
    }

    public function getAprovada(){
        return $this->aprovada;
    }

    public function setAprovada($aprvd){
        $this->aprovada = $aprvd;
    }

//Métodos

//Aqui criamos duas variaveis para receber os vetores inseridos dentro dos parênteses
//para assim definir quais são os Lutadores escolhidos para a luta
    public function marcarLuta($L1, $L2){
        if ($L1->getCategoria() === $L2->getCategoria() && ($L1 != $L2)){
            $this->aprovada = True;
            $this->desafiado = $L1;
            $this->desafiante = $L2;
        }
        else{
            $this->aprovada = False;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function lutar(){
        if ($this->aprovada){
            echo "<p>#####DESAFIANTE#####</p>";
            //Aqui chamo um atributo, para conseguir chamar o método relacionado á esse atributo(no caso apresentar())
            $this->desafiante->apresentar();
            echo "<p>#####DESAFIADO#####</p>";
            $this->desafiado->apresentar();
            //Aqui faço um sistema de vencer, perder e empatar, usando uma função randomica
            // rand() que esolhe um número aleatório entre o primeiro número dado e o último
            $vencedor = rand(0,2);// 0,1,2 ou seja três números
            //Aqui crio uma switch:
            switch($vencedor){
                case 0: //Empate
                    echo "<p>===EMPATE===</p>";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;//break serve para quebrar o andamento do case depois q ele chega ao fim

                case 1://Desafiado Ganha
                    echo "<p>==={$this->desafiado->getNome()} VENCEU===</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                    
                case 2://Desafiante Ganha
                    echo "<p>==={$this->desafiante->getNome()} VENCEU===</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
        }
        else{
            echo "<p>A luta não pode ser realizada!</p>";
        }
    }

}