<?php
/* $Id: StringDisplay.php 4 2005-03-21 12:00:34Z shinobu $ */

require_once "AbstractDisplay.php";

class StringDisplay extends AbstractDisplay {
    private $string;
    private $width;

    public function StringDisplay($string){
        $this->string = $string;
        $this->width = strlen($string);
    }

    public function open(){
        $this->printLine();
    }

    public function myPrint(){
        echo "|" . $this->string . "|" . "\n";
    }

    public function close(){
        $this->printLine();
    }

    private function printLine(){
        echo "+";
        for($i = 0; $i < $this->width; $i++){
            echo "-";
        }
        echo "+" . "\n";
    }
}

?>
