<?php
require_once __DIR__ . "/classes/Prodotto.php";
require_once __DIR__ . "/classes/Categoria.php";
require_once __DIR__ . "/classes/Gioco.php";
require_once __DIR__ . "/classes/Cuccia.php";
require_once __DIR__ . "/classes/Cibo.php";

$prodotto1= new Gioco(200,"dummy1","dummy2");
$prodotto1->detailProdotto1="dettagli1";
$prodotto1->detailProdotto2="dettagli2";
$prodotto1->detailProdotto3="dettagli3";
$prodotto1->categoria=new Categoria("cane");
var_dump($prodotto1);