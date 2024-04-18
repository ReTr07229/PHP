<?php 

//Arquivo da classe

class Lutador{
    private string $nome, $nacionalidade;
    private int $idade;
    private float $altura , $peso;
    private string $categoria;
    private int $vitorias, $derrotas, $empates;

    public function __construct($no, $na, $ide, $al, $p, $v, $d, $emp){
        $this->setNome($no);
        $this->setNacionalidade($na);
        $this->setIdade($ide);
        $this->setAltura($al);
        $this->setPeso($p);
        $this->setVitorias($v);
        $this->setDerrotas($d);
        $this->setEmpates($emp);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($no){
        $this->nome = $no;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function setNacionalidade($na){
        $this->nacionalidade = $na;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setIdade($ide){
        $this->idade = $ide;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setAltura($al){
        $this->altura = $al;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setPeso($p){
        $this->peso = $p;
        $this->setCategoria();
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria(){
        if ($this->getPeso() < 52.2){
            $this->categoria = "Inválido(Abaixo do Peso tabelado)";
        }
        
        elseif ($this->getPeso() <= 70.3){
            $this->categoria = "Peso Pena";
        }

        elseif ($this->getPeso() <= 83.9){
            $this->categoria = "Peso Médio";
        }

        elseif ($this->getPeso() <= 120.2){
            $this->categoria = "Peso Pesado";
        }

        else{
            $this->categoria = "Inválido(Ácima do peso tabelado)";
        }
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function setVitorias($v){
        $this->vitorias = $v;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function setDerrotas($d){
        $this->derrotas = $d;
    }

    public function getEmpates(){
        return $this->empates;
    }

    public function setEmpates($emp){
        $this->empates = $emp;
    }

    public function apresentar(){
        echo "<p>Está vindo um novo DESAFIANTE!!!</p>";
        echo "<p>Eis Aqui {$this->getNome()} com {$this->getIdade()}anos</p>";
        echo "<p>Vindo(a) Direto do(a) {$this->getNacionalidade()}, Pesando {$this->getPeso()}kg e Medindo {$this->getAltura()} de altura</p>";
        echo "<p>Prometendo sucesso em sua categoria: {$this->getCategoria()}";
        echo "<p>Com números EXTRAODINÁRIOS DE {$this->getVitorias()} Vitórias, {$this->getDerrotas()} Derrotas, {$this->getEmpates()} Empates</p>";
    }

    public function status(){
        echo "<p>-------------------------</p>";
        print_r($this->getNome());
        print_r("<p>Categoria {$this->getCategoria()}</p>");
        print_r("<p>{$this->getVitorias()} Vitórias</p>");
        print_r("<p>{$this->getDerrotas()} Derrotas</p>");
        print_r("<p>{$this->getEmpates()} Empates</p>");
    }

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

}