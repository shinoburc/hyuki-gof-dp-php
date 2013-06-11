<?php
/* $Id: MyDirectory.php 25 2005-04-03 06:46:02Z shinobu $ */

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

    public function iterator(){
        return $this->directory;
    }

    public function accept($v){
        $v->visit($this);
    }
}

?>
