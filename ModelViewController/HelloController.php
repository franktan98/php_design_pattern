<?php

require_once __DIR__.'/Controller.php';
require_once __DIR__.'/View.php';
require_once __DIR__.'/HelloModel.php';

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Hello
 *
 * @author frank
 */
class HelloController extends Controller{
    private function init_class(){
    }
    
    public function __construct() {
        parent::__construct();
        $this->init_class();
    }
    
    public function index(){
        $this->model['some_value'] = new HelloModel();
        
        $this->view = new View();
        $this->view->use_template(true);
        $url_show = __DIR__.'/HelloView.php' ; 
        echo $this->view->show_page($url_show,$this->model );
    }
    
}
$temp = new HelloController();
$temp->index();