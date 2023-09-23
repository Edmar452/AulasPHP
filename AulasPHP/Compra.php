<?php

class Compra{
    private $produto;
    private $valor;
    private $quantidade;


    public function __construct($produto,$valor,$quantidade)
    {
        $this->setValor($valor);
        $this->setQuantidade($quantidade);
        $this->setProduto($produto);
    }
    public function TotalCompra()
    {
        return $this->quantidade* $this->valor;
    }

    public function setvalor($valor)
    {
        if ($valor<0){
            $this->valor=0;
        } else{
            $this->valor=$valor;
        }
    }
    public function getvalor()
    {
        return $this->valor;
    }
    public function setQuantidade($quantidade)
    {
        if ($quantidade<0){
            $this->valor=0;
        } else{
            $this->quantidade=$quantidade;
        }
    }
    public function getquantidade()
    {
        return $this->quantidade;
    }
    public function setProduto($produto)
    {
        if (empty($produto)){
            $this->produto="Produto";
        } else{
            $this->produto=$produto;
        }
    }
    public function getproduto()
    {
        return $this->produto;
    }
}

$compra1 = new Compra("Nike",300,2);

echo "Produto = {$compra1->getproduto()}<br>";
echo "Valor = {$compra1->getvalor()}<br>";
echo "Quantidade = {$compra1->getquantidade()}<br>";
echo "Total a Pagar = {$compra1->TotalCompra()}<br>";