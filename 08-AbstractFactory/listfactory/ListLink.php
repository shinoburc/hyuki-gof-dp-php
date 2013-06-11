<?php
/* $Id: ListLink.php 17 2005-03-21 16:43:20Z shinobu $ */

class ListLink extends Link {
    public function ListLink($caption,$url){
            parent::__construct($caption,$url);
    }

    public function makeHTML(){
        return " <li><a href=\"" . $this->url . "\">" . $this->caption . "</a></li>\n";
    }
}

?>
