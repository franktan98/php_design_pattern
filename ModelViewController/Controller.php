<?php
/*
 * This file contain MVC Controller Class
 */
/**
 * Description of Controller
 * this class is a base class of MVC Controller Design Pattern.
 *
 * @author franktan98
 */
class Controller{
    protected $model ; 
    protected $view ;
    protected $input_method ; 
    
    private function init_class(){
        $this->model = null ; 
        $this->view = null ;        
    }
    
    public function __construct() {
        $this->init_class();
    }
}