<?php
/*
 * This file contain SMTPService Class
 */
/**
 * Description of SMTPService class
 * this class provide email sending service when connecting to the smtp server.
 *
 * @author franktan98
 */
class SMTP_Service{
    // Connecting to SMTP server
    public function connect_server(){
        echo '<br /> ';
        echo 'connect to SMTP server';
        echo '<br /> ';
    }
    // sending message via email 
    public function sending_email( $source_receiver , $source_message ){
        echo '<br /> ';
        echo 'sending email to '. $source_receiver ; 
        echo '<br /> ';
        echo 'with contain : '. $source_message ;
        echo '<br /> ';
    }    
}
