<?php
/* $Id: Border.php 24 2005-04-03 06:04:57Z shinobu $ */

require_once "Display.php";

abstract class Border extends Display {
    protected $display;

    protected function __construct($display){
        $this->display = $display;
    }
}

?>
