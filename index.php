<?php

include_once __DIR__ . '/classi/category.php';
include_once __DIR__ . '/classi/cibo.php';
include_once __DIR__ . '/classi/accessori.php';
include_once __DIR__ . '/classi/giocattoli.php';

$category = [
    'cane' => new Category('cane', '<i class="fa-solid fa-dog"></i>'),
    'gatto' => new Category('gatto', '<i class="fa-solid fa-cat"></i>'),
    'uccello' => new Category('uccello', '<i class="fa-solid fa-bird"></i>')
];
var_dump($category);
$prodotti = [
    new Cibo('Royal Canin', 'https://m.media-amazon.com/images/I/71fwkZg9m6L._AC_SY879_.jpg', $category['cane'], 43.99, 545, 'prosciutto, riso'),
    new Cibo('Almo Nature', 'https://static.zoomalia.com/prod_img/119946/lm_6455e9f92a01c986bafcabbafd145520b131649337157.jpg', $category['cane'], 44.99, 600, 'manzo, cereali'),
    new Accessori('Voliera Bella casa', 'https://shop-cdn-m.mediazs.com/bilder/voliera/ferplast/bella/casa/2/400/71860_pla_vogelvoliere_bellacasa_back_2.jpg', $category['uccello'], 184.99, 'Legno', 'M: 184x23'),
    new Giocattoli('Topini di peluche', 'https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/400/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg', $category['gatto'], 4.99, 'Morbido con codina in corda', '3x3')
];
var_dump($prodotti);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bool Shop</title>
    <!-- Link Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <h3>I nostri prodotti</h3>

    <div class="row"> <?php
                        foreach ($prodotti as $card) {
                            //Attivo metodi contenuti in cibo.php accessori.php e giocattoli.php che stampa card dinamiche
                            $card->displayProjectCard();
                        } ?> </div>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>