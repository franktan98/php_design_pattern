<?php
/**
 * This file contain EmailAdapter.php Class
 * 
 * require ICommunication.php to provide file with ICommunication interface.
 * require SMTPservice.php provide SMTPService class.
 * require POP3Service.php provide Pop3Service class.
 */
/**
 * Description of EmailAdapter
 * this class implements icommunication interface. by implement this interface
 * this class act as a communication adapter for system.
 * this class use pop3 service to receive message
 * and use smtp service to sending message
 *
 * @author franktan98
 */
require_once __DIR__.'/ICommunication.php' ;
require_once __DIR__.'/SMTP_Service.php' ;
require_once __DIR__.'/POP3_Service.php' ;

class EmailAdapter implements ICommunication {
    public $pop3_server ;
    public $smtp_server ; 
    
    public function __construct() {
        // assign classes to variable
        $this->pop3_server = new POP3_Service();
        $this->smtp_server = new SMTP_Service();
    }
    
    public function connecting() {
        // connect to pop3 and smtp service
        $this->pop3_server->connect_server() ;
        $this->smtp_server->connect_server() ; 
    }

    public function receive_message() {
        //use pop3 to receive message
        $this->pop3_server->receiving_email();
    }

    public function send_message($source_message, $source_receiver) {
        // use smtp to send message
        $this->smtp_server->sending_email($source_message, $source_receiver);
    }
}