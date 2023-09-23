<?php

/*
Crie um programa usando funções que vai ajudar a unimar
a abrir salas de ADS para o próximo ano. 
Vamos precisar considerar o número de turmas, 
o número de salas, mesas por sala, um computador por aluno
e os custos, por sala e total.

Custo por computador: R$3000
Custo por mesa: R$500
Cada turma tem no máximo 50 alunos
As salas tem 5 colunas por 10 fileiras (se a turma encher)
Cada mesa cabem dois computadores (dois alunos).

A função principal deve retornar um array com outros
arrays internos (um por turma que abrir), mais as 
infos gerais de custo. Exemplo.

Alunos: 90
Retorno:
Array(
"custoTotal":x,
"salas":2,
"turmas":array(
    "alunos":50,
    "computadores:50,
    "mesas":25,
    "custo":x
    )
)

*/

$preço_Pc = 3000;
$preço_Mesa = 500; //Apenas para duas pessoas por mesa
$colunas = 5;
$fileiras = 5;

$Alunos = 90;

function F_C($fileiras, $Colunas)
{
    return $fileiras * $Colunas;
}
function CustoTotal($pcs, $F_C, $Mesas_preço)
{
    return $pcs * $F_C + $Mesas_preço;
}
function Mesa($mesa, $F_C)
{
    return $mesa * $F_C;
}

$F_C = F_C($fileiras, $colunas,);

$computadores_por_sala = $F_C * 2;

$MESA = Mesa($preço_Mesa, $F_C);
$CustoTotal = CustoTotal($preço_Pc, $F_C, $MESA);
echo "Alunos=",$Alunos, "<br>", "Computadores =", $computadores_por_sala,"<br>", "Total De Mesas =", $F_C, "<br>", "Valor Total=", $CustoTotal;

$Turma=array(
    "Alunos = ",$Alunos,
    "Computares = ",$computadores_por_sala,
    "Total de Mesas = ", $F_C,
    "Custo Total = ",$CustoTotal
);// Nao consegui puxar pra printar a array o echo fala que precisa ta em String 

