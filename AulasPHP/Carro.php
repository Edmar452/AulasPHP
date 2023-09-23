<?php

class Carro{
    private $marca;
    private $modelo;
    private $capacidadeTanque;
    private $autonomia;

    public function __construct($marca,$modelo,$capacidadeTanque,$autonomia)
    {
        echo "Carro Gerado";
        $this->setmarca($marca);
        $this->setmodelo($modelo);
        $this->setcapacidade($capacidadeTanque);
        $this->setmedia_litro($autonomia);
    }
    public function setmarca($marca_carro)
        {
            if (empty($marca_carro))
            {
            $this->marca= "MARCA";
            }else{
                $this->marca=$marca_carro;
            }
        }
    public function getmarca()
    {
        return $this->marca;
    }
    public function setmodelo($modeloCarro)
        {
            if (empty($modeloCarro))
            {
            $this->modelo= "MODELO";
            }else{
                $this->modelo=$modeloCarro;
            }
        }
        public function getmodelo()
    {
        return $this->modelo;
    }    
    public function setcapacidade($capacidadeMax)
    {
        if (empty($capacidadeMax)){
        $this->capacidadeTanque=1;
        }else{
        $this->capacidadeTanque=$capacidadeMax;
        }
    }
    public function getcapacidade()
    {
        return $this->capacidadeTanque;
    }
    public function setmedia_litro($mediaLitro)
    {
        if (empty($mediaLitro)){
        $this->autonomia=1;
        }else{
        $this->autonomia=$mediaLitro;
        }
    }
    public function getmedia()
    {
        return $this->autonomia;
    }
    public function media_p_litro()
    {

    }
}   

$cliente1= new Carro("BMW","BMW-1997",40,5);

echo "Marca: {$cliente1->getmarca()}<br>";
echo "Modelo: {$cliente1->getmodelo()}<br>";
echo "Capacidade Do Tanque: {$cliente1->getcapacidade()}<br>";
echo "Media Por Litro: {$cliente1->getmedia()}<br>";
