<?php
// this file show how to call the template design pattern 
// loading related file
require_once __DIR__.'/KidMeal.php';
require_once __DIR__.'/PromotionMeal.php';

// call one of the template 
$temp = new KidMeal();
echo var_dump($temp->prepare_meal());
// call another template for show the diffenrence
$temp = new PromotionMeal();
echo var_dump($temp->prepare_meal());
?>