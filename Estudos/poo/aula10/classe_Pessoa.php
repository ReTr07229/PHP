<?php

class Pessoa
{
    //Atributos
    private string $nome;
    private int $idade;
    private string $sexo;

    //Métodos
    public function fazerAniv()
    {
        $this->idade = $this->getIdade() + 1;
        echo "<p>Feliz Aniversário!!!! agora você possui {$this->getIdade()}anos</p>";
    }

    //Métodos Especiais

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($no)
    {
        $this->nome = $no;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idd)
    {
        $this->idade = $idd;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sex)
    {
        $this->sexo = $sex;
    }
}
