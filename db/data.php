<?php 
require_once __DIR__ . '/../classes/Category.php';
require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/Toy.php';
require_once __DIR__ . '/../classes/Food.php';

$dog_category = new Category('Cane', 'https://icons.veryicon.com/png/o/animal/pet-icon/dog-24.png');
$cat_category = new Category('Gatto', 'https://www.svgrepo.com/show/9785/cat.svg');
$crocchette_salmone_cane = new Food('Crocchette al salmone', $dog_category, 12.5, 'https://www.naturepetshop.it/wp-content/uploads/tribal-pressato-a-freddo-salmone-per-cani-adulti.jpg','solido');
$crocchette_sgombro_gatto = new Food('Crocchette allo sgombro', $cat_category, 9.0, 'https://arcaplanet.vtexassets.com/arquivos/ids/266515/acana-cat-pacifica.jpg?v=637777463393930000','solido');
$topolino_gatto = new Toy('Topolino rumoroso', $cat_category, 3.0, 'https://raofarmaceutici.it/33818-thickbox_default/topolino-corda-gioco-gatto-colori-rosa-blu-giallo.jpg', 'plastica e cotone');

// var_dump($crocchette_salmone_cane, $topolino_gatto, $crocchette_sgombro_gatto);

// Call encoding function of Toy
$json_data = '[' . $crocchette_salmone_cane->toJSON() . ',' . $crocchette_sgombro_gatto->toJSON() . ',' . $topolino_gatto->toJSON() . ']';

//  var_dump($json_data);
?>
