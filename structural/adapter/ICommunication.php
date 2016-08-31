<?php
/*
 * This file contain ICommunication interface
 */
/**
 * Description of ICommunication
 * this interface use to implement a connection extra module
 * when add extra module no need to recoding them just implement it with adapter
 * then we can use it 
 *
 * @author franktan98
 */
interface ICommunication {
    //put your code here
    public function connecting();
    public function send_message($source_message, $source_receiver);
    public function receive_message();
}
