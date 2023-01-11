<?php
class Gioco extends Prodotto{
    private $materiale;

    function __construct( $nome,   $immagine,  $prezzo, string $materiale, $categoria){
        parent::__construct($nome, $immagine, $prezzo, $categoria);
        $this->materiale= $materiale;
    }

    public function getMateriale(){
        return $this->materiale;
    }
}