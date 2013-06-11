<?php
/* $Id: IDCardFactory.php 6 2005-03-21 12:38:57Z shinobu $ */

require_once "Factory.php";
require_once "IDCard.php";

class IDCardFactory extends Factory {
    private $owners = Array();
    
    protected function createProduct($owner){
        return new IDCard($owner);
    }

    protected function registerProduct($product){
        $this->owners[] = $product;
    }

    public function getOwners(){
        return $this->owners;
    }
}

?>
