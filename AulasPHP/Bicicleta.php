<?php

class Bicicleta
{
    public $marca;
    public $modelo;
    public $cor;
    public $ano;
    public $Nome;

    public function pedalar()
    {
            echo "Bicicleta {$this->marca} {$this->modelo} {$this->cor} esta pedalando <br>";
    }
    public function frear()
    {
        echo "Bicicleta {$this->marca} {$this->modelo} {$this->cor} esta Freou <br>";
    }
}

$caloi10 = new Bicicleta();
$caloi10->marca= 'Caloi';
$caloi10->modelo='10';
$caloi10->cor='Roxo';


$oggiHacker = new Bicicleta();
$oggiHacker->marca= 'OGGI';
$oggiHacker->modelo='Hacker';
$oggiHacker->cor='Vermelha';

$caloi10->pedalar();
$oggiHacker->pedalar();
$caloi10->frear();
$oggiHacker->frear();
