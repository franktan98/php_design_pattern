<?php
/**
 * This file contain HelloController
 * 
 * require Controller.php to provide file with Controller base class.
 * require View.php as display manager.
 * require HelloModel.php as data provider.
 */
/**
 * Description of HelloController
 * this class inherit from Controller . 
 * basic function to get data from HelloModel model 
 * and use View Class for web page display.
 *
 * @author franktan98
 */
require_once __DIR__.'/Controller.php';
require_once __DIR__.'/View.php';
require_once __DIR__.'/HelloModel.php';

class HelloController extends Controller{
    
    private function init_class(){
    // initial of class    
    }
    
    public function __construct() {
        // construct of the this class
        parent::__construct();
        $this->init_class();
    }
    
    public function index(){
        // assign data from HelloModel
        $this->model['some_value'] = new HelloModel();
        // assign View 
        $this->view = new View();
        $this->view->use_template(true);
        $url_show = __DIR__.'/HelloView.php' ; 
        // Display view
        echo $this->view->show_page($url_show,$this->model );
    }
}