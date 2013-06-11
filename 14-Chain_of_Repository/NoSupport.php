<?php
/* $Id: NoSupport.php 26 2005-04-03 07:24:16Z shinobu $ */

require_once "Support.php";

class NoSupport extends Support {
    public function __construct($name){
        parent::__construct($name);
    }

    protected function resolve($trouble){
        return false;
    }
}

?>
