<?php
require_once __DIR__ . "/classes/Prodotto.php";
require_once __DIR__ . "/classes/Categoria.php";
require_once __DIR__ . "/classes/Gioco.php";
require_once __DIR__ . "/classes/Cibo.php";

$cane = new Categoria("Cane", '<i class="fa-solid fa-dog"></i>');
$gatto= new Categoria("Gatto", '<i class="fa-solid fa-cat"></i>');

$prodottoGenerale= new Prodotto("Collare", "https://fattidicuoio.it/wp-content/uploads/2020/11/73B0491_MOD_29.11.2020-1.jpg", 12.50, $cane);
$cibo= new Cibo("Croccantini", "https://m.media-amazon.com/images/I/7192oKiC+pL._AC_SL1500_.jpg", 25, "21/02/2023", $gatto);
$gioco= new Gioco("Osso", "https://www.farmacosmo.it/166170-large_default/goodie-bone-large-osso-gomma-cani-112686.jpg", 7.50, "plastica", $cane);

$prodotti = [
    $prodottoGenerale,
    $cibo,
    $gioco,
]
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>OOP Animali</title>
</head>
<body>
    <div class="container">
        
        <div class="row">
        <?php foreach($prodotti as $prodotto){ ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $prodotto->getImage(); ?>" class="card-img-top" alt="<?php echo $prodotto->getName(); ?>">
                    <div class="card-body">
                        <div>
                            <?php echo $prodotto->getCategoria()->GetIcon() ?>
                        </div>
                        <h5 class="card-title"><?php echo $prodotto->getName(); ?></h5>
                        <p class="card-text"><?php echo $prodotto->getPrice(); ?>€</p>
                        <?php if(method_exists($prodotto, 'getScadenza')) { ?>
                        <p>Scadenza: <?php echo $prodotto->getScadenza(); ?></p>
                        <?php } ?>  
                        <?php if(method_exists($prodotto, 'getMateriale')) { ?>
                        <p>Materiale: <?php echo $prodotto->getMateriale(); ?></p>
                        <?php } ?>  
                        <a href="#" class="btn btn-primary">Acquista</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</body>
</html>