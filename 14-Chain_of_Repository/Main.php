<?php
/* $Id: Main.php 26 2005-04-03 07:24:16Z shinobu $ */

require_once "NoSupport.php";
require_once "LimitSupport.php";
require_once "SpecialSupport.php";
require_once "OddSupport.php";
require_once "Trouble.php";

$alice = new NoSupport("Alice");
$bob = new LimitSupport("Bob",100);
$charlie = new SpecialSupport("Charlie",429);
$diana = new LimitSupport("Diana",200);
$elmo = new OddSupport("Elmo");
$fred = new LimitSupport("Fred",300);

$alice->setNext($bob)->setNext($charlie)->setNext($diana)->setNext($elmo)->setNext($fred);

for($i = 0; $i < 500; $i += 33){
    $alice->supportMethod(new Trouble($i));
}

?>
