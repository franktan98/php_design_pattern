<?php
/*
 * This file contain PromotionPackage class
 * 
 * require MealPackage.php to provide file with MealPackage base class.
 */
/**
 * Description of PromotionMeal
 * this class inherit from MealPackage class. and provide template function 
 * abstract method for base class. to preparing promotion meal package.
 * 
 * @author franktan98
 */
require_once __DIR__ . '/MealPackage.php';

class PromotionMeal extends MealPackage {

    protected function prepare_drink() {
        return '100ml soda drink';
    }

    protected function prepare_food() {
        return 'PROMOTION meal';
    }

    protected function prepare_side_order() {
        return 'no side order';
    }

}
?>