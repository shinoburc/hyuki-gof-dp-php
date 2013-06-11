<?php
/* $Id: StringDisplayImpl.php 19 2005-03-27 15:54:39Z shinobu $ */

require_once "DisplayImpl.php";

class StringDisplayImpl extends DisplayImpl {
    private $string;
    private $width;

    public function StringDisplayImpl($string){
        $this->string = $string;
        $this->width = strlen($string);
    }

    public function rawOpen(){
        $this-> printLine();
    }

    public function rawPrint(){
        echo "|" . $this->string . "|" . "\n";
    }

    public function rawClose(){
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
