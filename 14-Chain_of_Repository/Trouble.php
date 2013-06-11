<?php
/* $Id: Trouble.php 26 2005-04-03 07:24:16Z shinobu $ */

class Trouble {
    private $number;

    public function __construct($number){
        $this->number = $number;
    }

    public function getNumber(){
        return $this->number;
    }

    public function toString(){
        return "[Trouble " . $this->number . "]";
    }
}

?>
