<?php
/* $Id: Tray.php 17 2005-03-21 16:43:20Z shinobu $ */

abstract class Tray extends Item {
    protected $tray = Array();

    public function Tray($caption){
        parent::__construct($caption);
    }

    public function add($item){
        $this->tray[] = $item;
    }
}

?>
