<?php
/* $Id: Factory.php 8 2005-03-21 12:59:10Z shinobu $ */

abstract class Factory {
    public final function create($owner){
        $p = $this->createProduct($owner);
        $this->registerProduct($p);
        return $p;
    }

    protected abstract function createProduct($owner);
    protected abstract function registerProduct($product);
}

?>
