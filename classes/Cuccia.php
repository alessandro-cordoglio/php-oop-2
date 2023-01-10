<?php
class Cuccia extends Prodotto{
    public $misura;
    public $dummyC1;
    public $dummyC2;

    function __construct(int $misura,$dummyC1, $dummyC2)
    {
        $this->misura = $misura;
        $this->dummyC1 = $dummyC1;
        $this->dummyC2 = $dummyC2;
    }

}