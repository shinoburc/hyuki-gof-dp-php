<?php
/* $Id: CharDisplay.php 4 2005-03-21 12:00:34Z shinobu $ */

require_once "AbstractDisplay.php";

class CharDisplay extends AbstractDisplay {
    private $ch;

    public function CharDisplay($ch){
        $this->ch = $ch;
    }

    public function open(){
        echo "<<";
    }

    public function myPrint(){
        echo $this->ch;
    }

    public function close(){
        echo ">>" . "\n";
    }
}

?>
