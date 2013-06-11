<?php
/* $Id: ListTray.php 17 2005-03-21 16:43:20Z shinobu $ */

class ListTray extends Tray {

    public function ListTray($caption){
        parent::__construct($caption);
    }

    public function makeHTML(){
        $buffer = null;
        $buffer .= "<li>\n";
        $buffer .= $this->caption . "\n";
        $buffer .= "<ul>\n";
        foreach($this->tray as $item){
            $buffer .= $item->makeHTML();
        }
        $buffer .= "</ul>\n";
        $buffer .= "</li>\n";
        return $buffer;
    }
}

?>
