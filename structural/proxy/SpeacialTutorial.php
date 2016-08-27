<?php
require_once __DIR__ . '/ITutorial.php';
/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of SpeacialTutorial
 *
 * @author frank
 */
class SpeacialTutorial implements ITutorial{
    private $standard_class ; 
    
    public function begin_tutorial(){
        $this->standard_class = new ClassTutorial();
        $this->standard_class->begin_tutorial();
        
        echo  '<br />Speacial Tutorial'; 
    }
}
