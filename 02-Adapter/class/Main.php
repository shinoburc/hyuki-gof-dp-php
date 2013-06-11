<?php
/* $Id: Main.php 2 2005-03-21 10:27:51Z shinobu $ */

require_once "PrintBanner.php";

$p = new PrintBanner("Hello");
$p->printWeak();
$p->printStrong();

?>
