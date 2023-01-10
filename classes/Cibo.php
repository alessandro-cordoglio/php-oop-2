<?php
class Cibo extends Prodotto{
    public $composizione;
    public $dummyC1;
    public $dummyC2;

    function __construct($composizione,$dummyC1, $dummyC2)
    {
        $this->composizione = $composizione;
        $this->dummyC1 = $dummyC1;
        $this->dummyC2 = $dummyC2;
    }

}