<?php
require_once __DIR__.'/SMSAdapter.php';
require_once __DIR__.'/EmailAdapter.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$receiver_number = '0123456789';
$receiver_contact = 'abc@def.com';
$message = 'some message';

$email = new EmailAdapter();
$email->connecting();
$email->receive_message();
$email->send_message($message, $receiver_contact);

$sms_service = new SMSAdapter();
$sms_service->connecting();
$sms_service->receive_message();
$sms_service->send_message($message, $receiver_contact);
