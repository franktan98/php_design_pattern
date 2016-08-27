<?php
require_once __DIR__ . '/OnlineTutorial.php';
require_once __DIR__ . '/SpeacialTutorial.php';
require_once __DIR__ . '/ClassTutorial.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$class = new OnlineTutorial();
$class->begin_tutorial() ;
$class = new SpeacialTutorial();
$class->begin_tutorial() ;

//$class = new ClassTutorial();
//$class->begin_tutorial() ; 