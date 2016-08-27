<?php
require_once __DIR__.'/ICommunication.php' ;
require_once __DIR__.'/GSM_network.php' ;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SMSAdapter
 *
 * @author frank
 */
class SMSAdapter implements ICommunication{
    private $network;
    
    public function __construct(){
        $this->network = new GSM_network();
    }
    
    public function connecting() {
        echo '<br /> ';
        echo 'get GSM signal';
        echo '<br /> ';
    }

    public function receive_message() {
        $this->network->read_SMS();
    }

    public function send_message($source_message, $source_receiver) {
        $this->network->send_SMS($source_message, $source_receiver);
    }
}
