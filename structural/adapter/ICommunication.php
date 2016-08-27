<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author frank
 */
interface ICommunication {
    //put your code here
    public function connecting();
    public function send_message($source_message, $source_receiver);
    public function receive_message();
}
