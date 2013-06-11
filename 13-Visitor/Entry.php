<?php
/* $Id: Entry.php 25 2005-04-03 06:46:02Z shinobu $ */

require_once "Acceptor.php";
require_once "FileTreatmentException.php";

abstract class Entry implements Acceptor{
    public abstract function getName();
    public abstract function getSize();

    public function add($entry){
        throw new FileTreatmentException();
    }

    public function iterator(){
        throw new FileTreatmentException();
    }

    public function toString(){
        return $this->getName() . " (" . $this->getSize() . ")";
    }
}

?>
