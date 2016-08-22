require_once __DIR__.'/KidMeal.php';
require_once __DIR__.'/PromotionMeal.php';

abstract class meal_package{

	abstract protected function prepare_drink();
	abstract protected function prepare_food();
	abstract protected function prepare_side_order();

	public function prepare_meal(){
		$return_meal = null ;
		$return_meal[] = self::prepare_drink();
		$return_meal[] = self::prepare_meal();
		$return_meal[] = self::prepare_side_order();

		return $return_meal;
	}
}