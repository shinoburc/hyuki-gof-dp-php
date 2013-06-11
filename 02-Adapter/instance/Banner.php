<?php
/* $Id: Banner.php 2 2005-03-21 10:27:51Z shinobu $ */

class Banner {
    private $string;

    public function __construct($string){
        $this->string = $string;
    }

    public function showWithParen(){
        echo "(" . $this->string . ")" . "\n";
    }

    public function showWithAster(){
        echo "*" . $this->string . "*" . "\n";
    }
}

?>
