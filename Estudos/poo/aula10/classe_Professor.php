<?php

require_once "classe_Aluno.php";

class Professor extends Pessoa
{
    private string $especialidade;
    private float $salario;

    //Métodos
    public function receberAum($valor_aumento)
    {
        $this->salario = $this->getSalario() + $valor_aumento;
    }
    //Métodos Especiais

    public function __construct($no, $idd, $sex, $es, $s)
    {
        $this->setNome($no);
        $this->setIdade($idd);
        $this->setSexo($sex);
        $this->setEspecialidade($es);
        $this->setSalario($s);
    }
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade($es)
    {
        $this->especialidade = $es;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($s)
    {
        $this->salario = $s;
    }
}
