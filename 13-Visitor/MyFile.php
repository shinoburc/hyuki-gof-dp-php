<?php
/* $Id: MyFile.php 25 2005-04-03 06:46:02Z shinobu $ */

require_once "Entry.php";

class MyFile extends Entry {
    private $name;
    private $size;

    public function __construct($name,$size){
        $this->name = $name;
        $this->size = $size;
    }

    public function getName(){
        return $this->name;
    }

    public function getSize(){
        return $this->size;
    }

    public function accept($v){
        $v->visit($this);
    }
}

?>
