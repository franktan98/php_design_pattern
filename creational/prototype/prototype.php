<?php
class Book_Record{
	private $bookname ;
	private $price ; 
	
	public function __construct(){
	}

	public function __clone(){
	}

	public function set_bookname($source_bookname){
		$this->bookname = $source_bookname ; 
	}

	public function set_price($source_price){
		$this->price = $source_price ; 
	}

	public function get_book(){
		$return_value = array();

		$return_value['bookname'] = $this->bookname;
		$return_value['price'] = $this->price ; 

		return $return_value ;
	}
}

$temp = new Book_Record();
$temp->set_bookname('SQL');
$temp->set_price(9);
echo var_dump($temp->get_book() );

$temp1 = clone $temp;
$temp1->set_bookname('PHP');
$temp1->set_price(10);
echo var_dump($temp1->get_book() );

$temp3 = clone $temp;
$temp3->set_bookname('Master PHP');
$temp3->set_price(112);
echo var_dump($temp3->get_book() );




?>