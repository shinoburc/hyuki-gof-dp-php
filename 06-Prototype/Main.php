<?php
/* $Id: Main.php 12 2005-03-21 14:06:41Z shinobu $ */

require_once "Manager.php";
require_once "UnderlinePen.php";
require_once "MessageBox.php";

$manager = new Manager();
$upen = new UnderlinePen('-');
$mbox = new MessageBox('*');
$sbox = new MessageBox('/');
$manager->register("strong message", $upen);
$manager->register("warning box", $mbox);
$manager->register("slash box", $sbox);

$p1 = $manager->create("strong message");
$p1->user("Hello, world.");

$p2 = $manager->create("warning box");
$p2->user("Hello, world.");

$p3 = $manager->create("slash box");
$p3->user("Hello, world.");

?>
