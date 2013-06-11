<?php
/* $Id: CountDisplay.php 19 2005-03-27 15:54:39Z shinobu $ */

require_once "Display.php";

class CountDisplay extends Display {
    
    public function CountDisplay($impl){
        parent::__construct($impl);
    }

    public function multiDisplay($times){
        $this->open();
        for($i = 0; $i < $times; $i++){
            $this->myPrint();
        }
        $this->close();
    }
}

?>
