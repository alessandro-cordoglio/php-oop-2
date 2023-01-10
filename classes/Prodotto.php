<?php
class Prodotto{
    public $detailProdotto1;
    public $detailProdotto2;
    public $detailProdotto3;
    public $categoria;

    function __construct($detailProdotto1,$detailProdotto2,$detailProdotto3, Categoria $categoria)
    {
        $this->detailProdotto1 = $detailProdotto1;
        $this->detailProdotto1 = $detailProdotto1;
        $this->detailProdotto1 = $detailProdotto1;
        $this->categoria = $categoria;
    }

}