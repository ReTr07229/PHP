<?php

require_once "classe_Pessoa.php";

class Aluno extends Pessoa
{
    //Atributos
    private $matr;
    private string $curso;

    //Métodos
    public function cancelMatr()
    {
        require_once "questionario.html";
        if (isset($_POST['sim'])) {
            $this->matr = null;
            echo "<p>Matrícula cancelada</p>";
            print_r($this->getMatr());
        } elseif (isset($_POST['nao'])) {
            echo "<p>Matrícula não cancelada!</p>";
        }
    }

    //Métodos Especiais

    public function __construct($no, $idd, $sex, $m, $c)
    {
        $this->setNome($no);
        $this->setIdade($idd);
        $this->setSexo($sex);
        $this->setMatr($m);
        $this->setCurso($c);
    }

    public function getMatr()
    {
        return $this->matr;
    }

    public function setMatr($m)
    {
        $this->matr = $m;
    }
    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($c)
    {
        $this->curso = $c;
    }
}
