<?php

class Funcionario extends Pessoa
{
    //Atributos
    private string $setor;
    private bool $trabalhando;

    //Métodos
    public function mudarTrabalho()
    {
        ($this->trabalhando) ? $this->trabalhando = false : $this->trabalhando = true;
    }
    //Métodos Especiais

    public function __construct($no, $idd, $sex, $setr, $tb)
    {
        $this->setNome($no);
        $this->setIdade($idd);
        $this->setSexo($sex);
        $this->setSetor($setr);
        $this->setTrabalhando($tb);
    }

    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setr)
    {
        $this->setor = $setr;
    }

    public function getTrabalhando()
    {
        return $this->setor;
    }

    public function setTrabalhando($tb)
    {
        $this->trabalhando = $tb;
    }
}
