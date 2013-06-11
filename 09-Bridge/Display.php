<?php
/* $Id: Display.php 19 2005-03-27 15:54:39Z shinobu $ */

class Display {
    private $impl;

    public function __construct($impl){
        $this->impl = $impl;
    }

    public function open(){
        $this->impl->rawOpen();
    }

    public function myPrint(){
        $this->impl->rawPrint();
    }

    public function close(){
        $this->impl->rawClose();
    }

    public final function display(){
        $this->open();
        $this->myPrint();
        $this->close();
    }
}

?>
