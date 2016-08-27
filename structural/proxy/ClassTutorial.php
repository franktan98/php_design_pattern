<?php
require_once __DIR__ . '/ITutorial.php';
require_once __DIR__ . '/OnlineTutorial.php';
/**
 * 
 * To change this license header, choose License Headers in Project Properties. 
 */

/**
 * Description of ClassTutorial
 *
 * @author frank
 */
class ClassTutorial implements ITutorial {
    public function begin_tutorial() {
        echo '<br />Begin tutorial in class';
    }
}
