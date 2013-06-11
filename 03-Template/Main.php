<?php
/* $Id: Main.php 4 2005-03-21 12:00:34Z shinobu $ */

require_once "CharDisplay.php";
require_once "StringDisplay.php";

$d1 = new CharDisplay('H');
$d2 = new StringDisplay("Hello, world.");
$d3 = new StringDisplay("こんにちは。");

$d1->display();
$d2->display();
$d3->display();

?>
