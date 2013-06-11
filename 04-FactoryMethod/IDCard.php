<?php
/* $Id: IDCard.php 6 2005-03-21 12:38:57Z shinobu $ */

require_once "Product.php";

class IDCard extends Product {
    private $owner;

    function IDCard($owner){
        echo $owner . "のカードを作ります。" . "\n";
        $this->owner = $owner;
    }

    public function user(){
        echo $this->owner . "のカードを使います。" . "\n";
    }

    public function getOwner(){
        return $this->owner;
    }
}

