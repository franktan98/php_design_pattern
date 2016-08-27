<?php
require_once __DIR__ . '/ITutorial.php';
/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of OnlineTutorial
 *
 * @author frank
 */
class OnlineTutorial implements ITutorial {
    private $proxy_class ; 
    
    public function begin_tutorial(){
        $this->proxy_class = new ClassTutorial();
        $this->proxy_class->begin_tutorial();
        
        echo  '<br />Online Tutorial'; 
    }
}
