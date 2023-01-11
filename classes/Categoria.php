<?php
class Categoria{
    private $nome;
    private $icona;

    function __construct(string $nome, string $icona)
    {
        $this->nome = $nome;
        $this->icona = $icona;
    }

    function getName()
    {
        return $this->nome;
    }
    function getIcon()
    {
        return $this->icona;
    }
}