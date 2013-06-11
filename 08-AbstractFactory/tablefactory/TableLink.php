<?php
/* $Id: TableLink.php 17 2005-03-21 16:43:20Z shinobu $ */

class TableLink extends Link {

    public function TableLink($caption,$url){
        parent::__construct($caption,$url);
    }

    public function makeHTML(){
        return "<td><a href=\"" . $this->url . "\">" . $this->caption . "</a></td>\n";
    }
}

?>
