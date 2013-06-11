<?php
/* $Id: UnderlinePen.php 12 2005-03-21 14:06:41Z shinobu $ */

require_once "Product.php";

class UnderlinePen implements Product {
    private $ulchar;

    public function UnderlinePen($ulchar){
        $this->ulchar = $ulchar;
    }

    public function user($s){
        $length = strlen($s);
        echo "\"" . $s . "\"" . "\n";
        echo " ";
        for($i = 0; $i < $length; $i++){
            echo $this->ulchar;
        }
        echo "\n";
    }

    public function createClone(){
        return clone $this;
    }
}

?>
