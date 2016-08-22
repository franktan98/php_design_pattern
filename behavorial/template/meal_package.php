<?php
abstract class meal_package{
	abstract protected function prepare_drink();
	abstract protected function prepare_food();
	abstract protected function prepare_side_order();

	public function prepare_meal(){
		$return_package = array();
		$return_package['drink']= $this->prepare_drink();
		$return_package['meal']= $this->prepare_food();
		$return_package['side_order']= $this->prepare_side_order();
		return $return_package ; 
	}
}

?>