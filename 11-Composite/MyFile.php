<?php
/* $Id: MyFile.php 23 2005-04-03 05:14:55Z shinobu $ */

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

    public function printList($prefix = null){
        echo $prefix . "/" . $this->toString() . "\n";
    }
}

?>
