<?php
/*
 * This file contain HelloModel
 * 
 * require Model.php to provide file with Model base class.
 */
/**
 * Description of HelloModel
 * this class inherit from Model. \
 * basic function to collect data 
 * 
 * @author franktan98
 */
require_once __DIR__.'/Model.php';

class HelloModel extends Model{
    public $a ;
    public $b ; 

    protected function init_class(){
        // assign data to model.
        parent::init_class();
        $this->a = 'a line of text';
        $this->b = 'same text repeat many times follow loop setting';
    }
}
