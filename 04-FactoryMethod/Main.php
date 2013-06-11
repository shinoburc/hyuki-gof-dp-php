<?php
/* $Id: Main.php 6 2005-03-21 12:38:57Z shinobu $ */

require_once "IDCardFactory.php";

$factory = new IDCardFactory();
$card1 = $factory->create("·ë¾ë¹À");
$card2 = $factory->create("¤È¤à¤é");
$card3 = $factory->create("º´Æ£²Ö»Ò");

$card1->user();
$card2->user();
$card3->user();

?>
