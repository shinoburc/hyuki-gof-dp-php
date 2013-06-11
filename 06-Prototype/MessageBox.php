<?php
/* $Id: MessageBox.php 12 2005-03-21 14:06:41Z shinobu $ */

require_once "Product.php";

class MessageBox implements Product {
    private $decochar;

    public function MessageBox($decochar){
        $this->decochar = $decochar;
    }

    public function user($s){
        $length = strlen($s);
        for($i = 0; $i < $length + 4; $i++){
            echo $this->decochar;
        }
        echo "\n";
        echo $this->decochar . " " . $s . " " . $this->decochar . "\n";
        for($i = 0; $i < $length + 4; $i++){
            echo $this->decochar;
        }
        echo "\n";
    }

    public function createClone(){
        return clone $this;
    }
}

?>
