<?php
/*
 * This file contain POP3_Service Class
 */
/**
 * Description of Controller
 * this class is a base class of MVC Controller Design Pattern.
 *
 * @author franktan98
 */
class POP3_Service {
    public function connect_server(){
        echo '<br /> ';
        echo 'connect to pop3 server ';
        echo '<br /> ';
    }
    
    public function receiving_email(){
        echo '<br /> ';
        echo 'receive list of email';
        echo '<br /> ';
    }
}
