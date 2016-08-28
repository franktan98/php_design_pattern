<?php
require_once __DIR__.'/prototype.php';
// by using clone will reduce the time to create an object
$temp = new BookRecord();
$temp->set_bookname('SQL');
$temp->set_price(9);
echo var_dump($temp->get_book() );

$temp1 = clone $temp;
$temp1->set_bookname('PHP');
$temp1->set_price(10);
echo var_dump($temp1->get_book() );

$temp3 = clone $temp;
$temp3->set_bookname('Master PHP');
$temp3->set_price(112);
echo var_dump($temp3->get_book() );