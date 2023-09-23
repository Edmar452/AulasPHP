<?php

class Terreno
{
    private $frente;
    private $lateral;
    private $precoMetro;

    public function __construct($frente, $lateral, $preco)
    {
        $this->setFrente($frente);
        $this->setLateral($lateral);
        $this->setPreco($preco);
        echo "Objeto criado<br>";
    }

    public function area()
    {
        return $this->frente * $this->lateral;
    }

    public function perimetro()
    {
        return ($this->frente * 2) + ($this->lateral * 2);
    }

    public function precoVenda()
    {
        return $this->area() * $this->precoMetro;
    }

    public function setFrente($valorFrente)
    {
        if ($valorFrente < 0) {
            $this->frente = 0;
        } else {
            $this->frente = $valorFrente;
        }
    }

    public function getFrente()
    {
        return $this->frente;
    }

    public function setLateral($valorLateral)
    {
        if ($valorLateral < 0) {
            $this->lateral = 0;
        } else {
            $this->lateral = $valorLateral;
        }
    }

    public function getLateral()
    {
        return $this->lateral;
    }

    public function setPreco($valorPreco)
    {
        if ($valorPreco < 0) {
            $this->precoMetro = 0;
        } else {
            $this->precoMetro = $valorPreco;
        }
    }

    public function getPreco()
    {
        return $this->precoMetro;
    }
}

$terreno1 = new Terreno(5, 30, 1000); #cria instancia do objeto

echo "Frente do terreno: {$terreno1->getFrente()} metros <br>";
echo "Área do terreno: {$terreno1->area()} <br>";
echo "Perímetro do terreno: {$terreno1->perimetro()} <br>";
echo "Preço de venda: {$terreno1->precoVenda()} <br>";

$terreno2 = new Terreno(10, 25, 1500);

?>