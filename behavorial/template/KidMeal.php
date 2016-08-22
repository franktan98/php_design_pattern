<?php
require_once __DIR__.'/meal_package.php';

class KidMeal extends meal_package{
	protected function prepare_drink(){
		return '100ml soda drink';
	}
	protected function prepare_food(){
		return 'KID meal';
	}
	protected function prepare_side_order(){
		return 'tomato';	
	}
}

?>