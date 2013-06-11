<?php
/* $Id: Main.php 2 2005-03-21 10:27:51Z shinobu $ */

require_once "BookShelf.php";
require_once "Book.php";

$bookShelf = new BookShelf();
$bookShelf->appendBook(new Book("Around the World in 80 Days"));
$bookShelf->appendBook(new Book("Bible"));
$bookShelf->appendBook(new Book("Cinderella"));
$bookShelf->appendBook(new Book("Daddy-Long-Legs"));

$it = $bookShelf->iterator();
while($it->hasNext()){
    $book = $it->next();
    echo $book->getName() . "\n";
}

?>
