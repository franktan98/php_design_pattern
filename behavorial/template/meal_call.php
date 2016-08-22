<?php

require_once __DIR__.'/KidMeal.php';
require_once __DIR__.'/PromotionMeal.php';

$temp = new KidMeal();
echo var_dump($temp->prepare_meal());
$temp = new PromotionMeal();
echo var_dump($temp->prepare_meal());
?>