<?php
/* $Id: Link.php 17 2005-03-21 16:43:20Z shinobu $ */

abstract class Link extends Item {
    protected $url;

    public function Link($caption,$url){
        parent::__construct($caption);
        $this->url = $url;
    }
}

?>
