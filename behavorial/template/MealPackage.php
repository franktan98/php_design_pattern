<?php
/*
 * This file contain Template Design Pattern base class
 */

/**
 * Description of MealPackage
 * this class is an abstract class with 3 abstract method and 1 method calling 
 * those 3 abstract method. 
 *
 * @author franktan98
 */
abstract class MealPackage {

    // abstract method to preparing drink for a meal package
    abstract protected function prepare_drink();

    // abstract method to preparing food for a meal package
    abstract protected function prepare_food();

    // abstract method to preparing side order for a meal package
    abstract protected function prepare_side_order();

    public function prepare_meal() {
        $return_package = array();
        // preparing meal with call abstract method provide by subclass.
        $return_package['drink'] = $this->prepare_drink();
        $return_package['meal'] = $this->prepare_food();
        $return_package['side_order'] = $this->prepare_side_order();
        // return the meal detail.
        return $return_package;
    }

}
?>