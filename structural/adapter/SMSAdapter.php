<?php
/**
 * This file contain SMSAdapter.php Class
 * 
 * require ICommunication.php to provide file with ICommunication interface.
 * require GSM_network.php provide GSM_network class.
 */
/**
 * Description of SMSAdapter
 * this is the class implement with Icommunication interface. 
 * and this class with provide communication method with GSM network.
 *
 * @author franktan98
 */
require_once __DIR__.'/ICommunication.php' ;
require_once __DIR__.'/GSM_Network.php' ;

class SMSAdapter implements ICommunication{
    private $network;
    // when module create
    public function __construct(){
        $this->network = new GSM_Network();
    }
    //connecting to GSM network    
    public function connecting() {
        echo '<br /> ';
        echo 'get GSM signal';
        echo '<br /> ';
    }
    //receiving SMS message
    public function receive_message() {
        $this->network->read_SMS();
    }
    // sending SMS message
    public function send_message($source_message, $source_receiver) {
        $this->network->send_SMS($source_message, $source_receiver);
    }
}
