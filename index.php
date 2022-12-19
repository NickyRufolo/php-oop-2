

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