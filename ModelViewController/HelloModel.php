<?php
require_once __DIR__.'/Model.php';

class HelloModel extends Model{
    public $a ;
    public $b ; 

    protected function init_class(){
        parent::init_class();
        $this->a = 'a line of text';
        $this->b = 'same text repeat many times follow loop setting';
    }
}
