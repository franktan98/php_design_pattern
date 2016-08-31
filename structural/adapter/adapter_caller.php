<?php
require_once __DIR__.'/SMSAdapter.php';
require_once __DIR__.'/EmailAdapter.php';
// assign value into variable
$receiver_number = '0123456789';
$receiver_contact = 'abc@def.com';
$message = 'some message';

// using Email adapter to sending message
$email = new EmailAdapter();
$email->connecting();
$email->receive_message();
$email->send_message( $receiver_contact ,$message);

// using SMS Adapter to sending message
$sms_service = new SMSAdapter();
$sms_service->connecting();
$sms_service->receive_message();
$sms_service->send_message( $receiver_number,$message);
?>