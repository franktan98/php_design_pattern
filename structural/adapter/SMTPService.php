<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SMTP
 *
 * @author frank
 */
class SMTPService {
    public function connect_server(){
        echo '<br /> ';
        echo 'connect to SMTP server';
        echo '<br /> ';
    }
    
    public function sending_email( $source_receiver , $source_message ){
        echo '<br /> ';
        echo 'sending email to '. $source_receiver ; 
        echo '<br /> ';
        echo 'with contain : '. $source_message ;
        echo '<br /> ';
    }
    
    
}
