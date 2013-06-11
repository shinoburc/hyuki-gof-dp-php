<?php
/* $Id: RandomDisplay.php 19 2005-03-27 15:54:39Z shinobu $ */

require_once "Display.php";

class RandomDisplay extends Display {
    
    public function __construct($impl){
        parent::__construct($impl);
    }

    public function randomDisplay($max){
        $this->open();
        $times = rand(0,$max);
        for($i = 0; $i < $times; $i++){
            $this->myPrint();
        }
        $this->close();
    }
}

?>
