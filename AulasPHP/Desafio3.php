<?php

class Aluno
{
    public $RA;
    public $Nome;
    public $Curso;
    public $chamada;

    public function Chamada()
    {
        echo "RA: {$this->RA} <br>
        Nome: {$this->Nome}  <br>
        Curso: {$this->Curso}<br>
        Chamada: " .($this->chamada ? "Presente":"Faltou"). "<br>";
    }
}

$aluno1 = new Aluno();
$aluno1->chamada=true;
$aluno1->Nome='Edmar';
$aluno1->RA='1959465';
$aluno1->Curso='Analise Desenvolvimento de Sistemas';

$aluno2 = new Aluno();
$aluno2->chamada=true;
$aluno2->Nome='Erik';
$aluno2->RA='1959937';
$aluno2->Curso='Analise Desenvolvimento de Sistemas';

$aluno3 = new Aluno();
$aluno3->chamada=false;
$aluno3->Nome='Pedro';
$aluno3->RA='1968133';
$aluno3->Curso='Analise Desenvolvimento de Sistemas';

$aluno4 = new Aluno();
$aluno4->chamada=false;
$aluno4->Nome='Rogerio';
$aluno4->RA='1969034';
$aluno4->Curso='Analise Desenvolvimento de Sistemas';

$aluno5 = new Aluno();
$aluno5->chamada=false;
$aluno5->Nome='Vitor';
$aluno5->RA='1969980';
$aluno5->Curso='Analise Desenvolvimento de Sistemas';

$aluno5 = new Aluno();
$aluno5->chamada=true;
$aluno5->Nome='Nicolas B.';
$aluno5->RA='1967759';
$aluno5->Curso='Analise Desenvolvimento de Sistemas';

$Mini_Turma = [$aluno1,$aluno2,$aluno3,$aluno4,$aluno5];

foreach ($Mini_Turma as $aluno)
{
        $aluno->Chamada();
        echo "<br>";
}
