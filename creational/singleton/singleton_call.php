<?php
require_once __DIR__.'/Singleton.php';
// calling singleton classs to create object itself.
$temp = Simple_PDO::singleton('mysql','localhost',null,'shop','aaaa','aaaa');
echo var_dump($temp->execute_query('shop','SELECT * FROM product',null) );

