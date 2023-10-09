<?php

function totalPC($Colunas, $Fileras)
{
    return ($Colunas * $Fileras);
}

function orçamento($total_PC, $Valor_PC)
{
    return ($total_PC * $Valor_PC);
}

$totalPC = totalPC(8, 5);
$orçamento = orçamento($totalPC, 3400);

echo "Total de Computadores Necessarios:" . $totalPC . "<br>";
echo "Total De Custos:" . $orçamento . "<br>";
