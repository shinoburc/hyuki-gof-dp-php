<?php
/* $Id: TableFactory.php 17 2005-03-21 16:43:20Z shinobu $ */

class TableFactory extends Factory {
    
    public function createLink($caption,$url){
        return new TableLink($caption,$url);
    }

    public function createTray($caption){
        return new TableTray($caption);
    }

    public function createPage($title,$author){
        return new TablePage($title,$author);
    }
}

?>
