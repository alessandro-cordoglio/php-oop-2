<?php
require_once __DIR__ . "/classes/Prodotto.php";
require_once __DIR__ . "/classes/Categoria.php";
require_once __DIR__ . "/classes/Gioco.php";
require_once __DIR__ . "/classes/Cuccia.php";
require_once __DIR__ . "/classes/Cibo.php";

$prodotto1= new Prodotto("test","test2","test3",new Categoria("cane"));
var_dump($prodotto1);