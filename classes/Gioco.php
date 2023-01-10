<?php
class Gioco extends Prodotto{
    public $age;
    public $dummy1;
    public $dummy2;

    function __construct(int $age,$dummy1, $dummy2)
    {
        $this->age = $age;
        $this->dummy1 = $dummy1;
        $this->dummy2 = $dummy2;
    }

}