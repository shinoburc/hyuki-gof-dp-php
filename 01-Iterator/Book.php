<?php
/* $Id: Book.php 2 2005-03-21 10:27:51Z shinobu $ */

class Book {
    /* Book name String */
    private $name = "";
    public function Book($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
}

?>
