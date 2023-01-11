<?php
require_once __DIR__ . "/Prodotto.php";
class Cibo extends Prodotto{
    private $dataScadenza;

    function __construct( $nome,   $immagine,  $prezzo, string $dataScadenza, $categoria){
        parent::__construct($nome, $immagine, $prezzo, $categoria);
        $this->dataScadenza= $dataScadenza;
    }

    public function getScadenza(){
        return $this->dataScadenza;
    }
}
