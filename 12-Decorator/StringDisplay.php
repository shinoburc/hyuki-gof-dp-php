<?php
/* $Id: StringDisplay.php 24 2005-04-03 06:04:57Z shinobu $ */

require_once "Display.php";

class StringDisplay extends Display {
    private $string;

    public function __construct($string){
        $this->string = $string;
    }

    public function getColumns(){
        return strlen($this->string);
    }

    public function getRows(){
        return 1;
    }

    public function getRowText($row){
        if($row == 0){
            return $this->string;
        } else {
            return null;
        }
    }
}

?>
