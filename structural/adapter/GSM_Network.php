<?php
/*
 * This file contain GSM_Network Class
 */
/**
 * Description of GSM_Network class
 *
 * @author franktan98
 */
class GSM_Network {
    public function send_SMS($source_sender , $source_message ){
        echo '<br />';
        echo 'sender number : '. $source_sender ; 
        echo '<br /> ';
        echo 'sender message : '. $source_message ; 
        echo '<br /> ';
        echo 'convert to SMS format and sending.';
        echo '<br />';
    }
    
    public function read_SMS(){
        echo '<br />';
        echo 'receive list of SMS';
        echo '<br />';
    }
}
