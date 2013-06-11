<?php
/* $Id: OddSupport.php 26 2005-04-03 07:24:16Z shinobu $ */

require_once "Support.php";

class OddSupport extends Support {
    public function __construct($name){
        parent::__construct($name);
    }

    protected function resolve($trouble){
        if($trouble->getNumber() % 2 == 1){
            return true;
        } else {
            return false;
        }
    }
}

?>
