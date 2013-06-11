<?php
/* $Id: Entry.php 23 2005-04-03 05:14:55Z shinobu $ */

require_once "FileTreatmentException.php";

abstract class Entry {
    public abstract function getName();
    public abstract function getSize();

    public function add($entry){
        throw new FileTreatmentException();
    }

    public abstract function printList($prefix = null);

    public function toString(){
        return $this->getName() . " (" . $this->getSize() . ")";
    }
}

?>
