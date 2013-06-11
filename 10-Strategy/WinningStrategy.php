<?php
/* $Id: WinningStrategy.php 21 2005-03-30 13:56:08Z shinobu $ */

require_once "Strategy.php";
require_once "Hand.php";

class WinningStrategy implements Strategy {
    private $random;
    private $won = false;
    private $prevHand;

    public function __construct($seed){
        $this->random = rand(0,2);
    }

    public function nextHand(){
        if(!$this->won){
            $this->prevHand = Hand::getHand($this->random);
        }
        return $this->prevHand;
    }

    public function study($win){
        $this->won = $win;
    }
}

?>
