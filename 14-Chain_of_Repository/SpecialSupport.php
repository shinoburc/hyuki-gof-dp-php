<?php
/* $Id: SpecialSupport.php 26 2005-04-03 07:24:16Z shinobu $ */

require_once "Support.php";

class SpecialSupport extends Support {
    private $number;
    public function __construct($name,$number){
        parent::__construct($name);
        $this->number = $number;
    }

    protected function resolve($trouble){
        if($trouble->getNumber() == $this->number){
            return true;
        } else {
            return false;
        }
    }
}

?>
