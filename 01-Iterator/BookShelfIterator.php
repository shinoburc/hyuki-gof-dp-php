<?php
/* $Id: BookShelfIterator.php 2 2005-03-21 10:27:51Z shinobu $ */

require_once "Iterator.php";

class BookShelfIterator implements MyIterator {
    private $bookShelf;
    private $index;

    /* constructor */
    public function BookShelfIterator($bookShelf){
        $this->bookShelf = $bookShelf;
        $this->index = 0;
    }

    public function hasNext(){
        if($this->index < $this->bookShelf->getLength()){
            return true;
        } else {
            return false;
        }
    }

    public function next(){
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index++;
        return $book;
    }
}
