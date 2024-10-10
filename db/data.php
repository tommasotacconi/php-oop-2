<?php 
require_once __DIR__ . '/../classes/Category.php';
require_once __DIR__ . '/../classes/Product.php';
require_once __DIR__ . '/../classes/Toy.php';
require_once __DIR__ . '/../classes/Food.php';

$dog_category = new Category('Cane', 'https://icons.veryicon.com/png/o/animal/pet-icon/dog-24.png');
$cat_category = new Category('Cat', 'https://www.svgrepo.com/show/9785/cat.svg');
$crocchette_salmone_cane = new Food('Crocchette al salmone', $dog_category, 12.5, 'solido');
$crocchette_sgombro_gatto = new Food('Crocchette allo sgombro', $cat_category, 9.0, 'solido');
$topolino_gatto = new Toy('Topolino rumoroso', $cat_category, 3.0, 'plastica e cotone');

var_dump($crocchette_salmone_cane, $topolino_gatto, $crocchette_sgombro_gatto);
?>
