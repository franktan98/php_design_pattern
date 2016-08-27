<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GSM_network
 *
 * @author frank
 */
class GSM_network {
    public function send_SMS($source_sender , $source_message ){
        echo '<br />';
        echo 'sender number : '. $source_sender ; 
        echo '<br /> ';
        echo 'sender message : '. $source_message ; 
        echo 'convert to SMS format and sending.';
        echo '<br />';
    }
    
    public function read_SMS(){
        echo '<br />';
        echo 'receive list of SMS';
        echo '<br />';
    }
}
