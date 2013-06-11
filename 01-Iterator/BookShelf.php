<?php
/* $Id: BookShelf.php 2 2005-03-21 10:27:51Z shinobu $ */

require_once "Aggregate.php";
require_once "Book.php";
require_once "BookShelfIterator.php";

class BookShelf implements Aggregate {
    /* Book instance array */
    private $books;
    private $last = 0;

    public function BookShelf(){
        $this->books = Array();
    }

    public function getBookAt($index){
        return $this->books[$index];
    }

    public function appendBook($book){
        $this->books[$this->last] = $book;
        $this->last++;
    }

    public function getLength(){
        return $this->last;
    }

    public function iterator(){
        return new BookShelfIterator($this);
    }
}

?>
