<?php
/* $Id: ListFactory.php 17 2005-03-21 16:43:20Z shinobu $ */

class ListFactory extends Factory {

    public function createLink($caption,$url){
        return new ListLink($caption,$url);
    }

    public function createTray($caption){
        return new ListTray($caption);
    }

    public function createPage($title,$author){
        return new ListPage($title,$author);
    }
}

?>
