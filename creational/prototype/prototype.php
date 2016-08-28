<?php
/*
 * This file contain BookRecord Class
 */
/**
 * Description of prototype
 * this class is a prototype Design Pattern class.
 * by the research use clone is more faster then create a new object.
 *
 * @author franktan98
 */
class BookRecord {
    private $bookname;
    private $price;

    public function __construct() {
        echo  'object created';
    }

    public function __clone() {
        echo 'Object cloned';
    }

    public function set_bookname($source_bookname) {
        $this->bookname = $source_bookname;
    }

    public function set_price($source_price) {
        $this->price = $source_price;
    }

    public function get_book() {
        $return_value = array();
        
        $return_value['bookname'] = $this->bookname;
        $return_value['price'] = $this->price;

        return $return_value;
    }
}
?>