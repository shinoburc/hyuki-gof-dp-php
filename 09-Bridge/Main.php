<?php
/* $Id: Main.php 19 2005-03-27 15:54:39Z shinobu $ */

require_once "Display.php";
require_once "CountDisplay.php";
require_once "RandomDisplay.php";
require_once "StringDisplayImpl.php";

$d1 = new Display(new StringDisplayImpl("Hello, Japan."));
$d2 = new CountDisplay(new StringDisplayImpl("Hello, World."));
$d3 = new CountDisplay(new StringDisplayImpl("Hello, Universe."));
$d4 = new RandomDisplay(new StringDisplayImpl("Hello, Random."));

$d1->display();
$d2->display();
$d3->display();
$d3->multiDisplay(5);
$d4->randomDisplay(5);

?>
