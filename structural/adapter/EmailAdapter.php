<?php
require_once __DIR__.'/ICommunication.php' ;
require_once __DIR__.'/SMTPservice.php' ;
require_once __DIR__.'/POP3service.php' ;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SMTPAdapter
 *
 * @author frank
 */
class EmailAdapter implements ICommunication {
    public $pop3_server ;
    public $smtp_server ; 
    
    public function __construct() {
        $this->pop3_server = new POP3service();
        $this->smtp_server = new SMTPService();
    }
    
    public function connecting() {
        $this->pop3_server->connect_server() ;
        $this->smtp_server->connect_server() ; 
    }

    public function receive_message() {
        $this->pop3_server->receiving_email();
    }

    public function send_message($source_message, $source_receiver) {
        $this->smtp_server->sending_email($source_message, $source_receiver);
    }
}
