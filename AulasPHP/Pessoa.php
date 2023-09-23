<?php

class Aluno
{
    public $RA;
    public $Nome;
    public $Curso;
    public $N1;
    public $N2;

    public function Media()
    {
        echo "RA: {$this->RA} <br>
        Nome: {$this->Nome}  <br>
        Curso: {$this->Curso}<br>
        Nota da P1: {$this->N1} <br>
        Nota da 'P2: {$this->N2} <br>
        Media do Aluno:" , ($this->N1 + $this->N2) / 2," <br>
        <br>";
    }
}

$Edmar = new Aluno();
$Edmar->N1=9;
$Edmar->N2=7;
$Edmar->Nome='Edmar';
$Edmar->RA='1959465';
$Edmar->Curso='Analise Desenvolvimento de Sistemas';
$Edmar->Media();

$Erik = new Aluno();
$Erik->N1=9;
$Erik->N2=8;
$Erik->Nome='Erik';
$Erik->RA='1959937';
$Erik->Curso='Analise Desenvolvimento de Sistemas';
$Erik->Media();
