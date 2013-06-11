<?php
/* $Id: TextBuilder.php 14 2005-03-21 14:58:03Z shinobu $ */

require_once "Builder.php";

class TextBuilder extends Builder {
    private $buffer = null;

    public function makeTitle($title){
        $this->buffer .= "=====================================\n";
        $this->buffer .= " ¡Ö" . $title . "¡× \n";
        $this->buffer .= "\n";
    }

    public function makeString($str){
        $this->buffer .= "¢£" . $str . "\n";
        $this->buffer .= "\n";
    }

    public function makeItems($items){
        foreach($items as $item){
            $this->buffer .= "  ¡¦" . $item . "\n";
        }
        $this->buffer .= "\n";
    }

    public function getResult(){
        $this->buffer .= "=====================================\n";
        return $this->buffer;
    }
}

?>
