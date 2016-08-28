<?php
/*
 * This file contain KidMeal Class
 * 
 * require MealPackage.php to provide file with MealPackage base class.
 */
/**
 * Description of KidMeal class
 * this class inherit from MealPackage class. and provide template function 
 * abstract method for base class. to preparing kid meal package.
 * 
 * @author franktan98
 */
require_once __DIR__ . '/MealPackage.php';

class KidMeal extends MealPackage {

    protected function prepare_drink() {
        return '100ml soda drink';
    }

    protected function prepare_food() {
        return 'KID meal';
    }

    protected function prepare_side_order() {
        return 'tomato';
    }

}
?>