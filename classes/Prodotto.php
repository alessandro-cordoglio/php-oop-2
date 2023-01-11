<?php
class Prodotto{
    private $nome;
    private $immagine;
    private $prezzo;
    private $categoria;

    function __construct(string $nome,string $immagine, float $prezzo,  Categoria $categoria)
    {
        $this->nome = $nome;
        $this->immagine = $immagine;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }

    function getName(){
        return $this->nome;
    }
    function getImage(){
        return $this->immagine;
    }
    function getPrice(){
        return $this->prezzo;
    }
    function getCategoria(){
        return $this->categoria;
    }

}

