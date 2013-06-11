<?php
/* $Id: ProbStrategy.php 20 2005-03-27 17:02:23Z shinobu $ */

require_once "Hand.php";
require_once "Strategy.php";

class ProbStrategy implements Strategy {
    private $random;
    private $prevHandValue = 0;
    private $currentHandValue = 0;
    private $history = Array( Array(1,1,1), Array(1,1,1), Array(1,1,1) );

    public function __construct($seed){
        $this->random = $this->myRandom($seed);
    }

    private function myRandom($seed){
        return rand(0,$seed);
    }

    public function nextHand(){
        $bet = $this->myRandom($this->getSum($this->currentHandValue));
        $handvalue = 0;
        if($bet < $this->history[$this->currentHandValue][0]){
            $handvalue = 0;
        } else if($bet < $this->history[$this->currentHandValue][0] + $this->history[$this->currentHandValue][1]){
            $handvalue = 1;
        } else {
            $handvalue = 2;
        }
        $this->prevHandValue = $this->currentHandValue;
        $this->currentHandValue = $handvalue;
        return Hand::getHand($handvalue);
    }

    private function getSum($hv){
        $sum = 0;
        for($i = 0; $i < 3; $i++){
            $sum += $this->history[$hv][$i];
        }
        return $sum;
    }

    public function study($win){
        if($win){
            $this->history[$this->prevHandValue][$this->currentHandValue]++;
        } else {
            $this->history[$this->prevHandValue][($this->currentHandValue + 1) % 3]++;
            $this->history[$this->prevHandValue][($this->currentHandValue + 2) % 3]++;
        }
    }
}

?>
