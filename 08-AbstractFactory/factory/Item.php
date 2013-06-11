<?php
/* $Id: Item.php 17 2005-03-21 16:43:20Z shinobu $ */

abstract class Item {
    protected $caption;

    public function Item($caption){
        $this->caption = $caption;
    }
    public abstract function makeHTML();
}

?>
