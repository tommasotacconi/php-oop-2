<?php 
require_once __DIR__ . '/../classes/Category.php';
require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/ValidForMemberSale.php';
require_once __DIR__ . '/../classes/Toy.php';
require_once __DIR__ . '/../classes/Food.php';
require_once __DIR__ . '/../classes/Kennel.php';

$dog_category = new Category('Cane', 'https://icons.veryicon.com/png/o/animal/pet-icon/dog-24.png');
$cat_category = new Category('Gatto', 'https://www.svgrepo.com/show/9785/cat.svg');
$crocchette_salmone_cane = new Food(
  'Crocchette al salmone',
  $dog_category,
  12.5,
  'https://www.naturepetshop.it/wp-content/uploads/tribal-pressato-a-freddo-salmone-per-cani-adulti.jpg',
  'solido',
  10);
$crocchette_sgombro_gatto = new Food(
  'Crocchette allo sgombro',
  $cat_category,
  9.0,
  'https://arcaplanet.vtexassets.com/arquivos/ids/266515/acana-cat-pacifica.jpg?v=637777463393930000',
  'solido',
  15.4);
$topolino_gatto = new Toy(
  'Topolino rumoroso',
  $cat_category,
  3.0,
  'https://raofarmaceutici.it/33818-thickbox_default/topolino-corda-gioco-gatto-colori-rosa-blu-giallo.jpg', 'plastica e cotone',
  30);
$cuccia_compatta_gatto = new Kennel(
  'Cuccia compatta gatto',
  $cat_category,
  35,
  'https://arcaplanet.vtexassets.com/arquivos/ids/277806/zolux-cuccia-gatti-louna-talpa.jpg?v=638053123401900000',
  [400, 250, 400]);
$cuccia_spaziosa_cane = new Kennel(
  'Cuccia spaziosa cane',
  $dog_category,
  55,
  'https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_-_2023-11-10t095231.396_1.png?width=700&height=700&store=default&image-type=image',
  [700, 650, 200]);

// var_dump($crocchette_salmone_cane, $topolino_gatto, $crocchette_sgombro_gatto);

// Call encoding function of Toy
$all_json_data = "'[" .
json_encode($crocchette_salmone_cane->jsonSerialize()) . ',' .
json_encode($crocchette_sgombro_gatto->jsonSerialize()) . ',' .
json_encode($topolino_gatto->jsonSerialize()) . ',' .
json_encode($cuccia_compatta_gatto->jsonSerialize()) . ',' .
json_encode($cuccia_spaziosa_cane->jsonSerialize()) .
"]'";
// ,{$crocchette_sgombro_gatto->jsonSerialize()}]");
// {$topolino_gatto->jsonSerialize()},{$cuccia_compatta_gatto->jsonSerialize()},{$cuccia_spaziosa_cane->jsonSerialize()}"
?>
