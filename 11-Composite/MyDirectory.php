<?php
/* $Id: MyDirectory.php 23 2005-04-03 05:14:55Z shinobu $ */

require_once "Entry.php";

class MyDirectory extends Entry {
    private $name;
    private $directory = Array();

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function getSize(){
        $size = 0;
        foreach($this->directory as $entry){
            $size += $entry->getSize();
        }
        return $size;
    }

    public function add($entry){
            $this->directory[] = $entry;
            return $this->directory;
    }

    public function printList($prefix = null){
        echo $prefix . "/" . $this->toString() . "\n";
        foreach($this->directory as $entry){
            $entry->printList($prefix . "/" . $this->name);
        }
    }
}

?>
