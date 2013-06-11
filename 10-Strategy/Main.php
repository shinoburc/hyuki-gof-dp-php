<?php
/* $Id: Main.php 23 2005-04-03 05:14:55Z shinobu $ */

require_once "Player.php";
require_once "WinningStrategy.php";
require_once "ProbStrategy.php";
require_once "Hand.php";

if(count($argv) != 3){
    echo "Usage: php Main.php randomseed1 randomseed2" . "\n";
    echo "Example: php Main.php 314 15" . "\n";
    exit(0);
}

Hand::init();

$seed1 = $argv[1];
$seed2 = $argv[2];

$player1 = new Player("Taro", new WinningStrategy($seed1));
$player2 = new Player("Hana", new ProbStrategy($seed2));

for($i = 0; $i < 10000; $i++){
    $nextHand1 = $player1->nextHand();
    $nextHand2 = $player2->nextHand();
    if($nextHand1->isStrongerThan($nextHand2)){
        echo "Winner:" . $player1->getName() . "\n";
        $player1->win();
        $player2->lose();
    } else if ($nextHand2->isStrongerThan($nextHand1)){
        echo "Winner:" . $player2->getName() . "\n";
        $player1->lose();
        $player2->win();
    } else {
        echo "Even..." . "\n";
        $player1->even();
        $player2->even();
    }
}
echo "Total result:" . "\n";
echo $player1->toString() . "\n";
echo $player2->toString() . "\n";

?>
