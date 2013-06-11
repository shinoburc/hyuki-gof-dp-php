<?php
/* $Id: Player.php 21 2005-03-30 13:56:08Z shinobu $ */

class Player {
    private $name;
    private $strategy;
    private $wincount;
    private $losecount;
    private $gamecount;

    public function __construct($name,$strategy){
        $this->name = $name;
        $this->strategy = $strategy;
    }

    public function nextHand(){
        return $this->strategy->nextHand();
    }
    public function win(){
        $this->strategy->study(true);
        $this->wincount++;
        $this->gamecount++;
    }

    public function lose(){
        $this->strategy->study(false);
        $this->losecount++;
        $this->gamecount++;
    }

    public function even(){
        $this->rosecount++;
    }

    public function getName(){
        return $this->name;
    }

    public function toString(){
            return "[" . $this->name . ":" . $this->gamecount . " games, " . $this->wincount . " win, " . $this->losecount . " lose" . "]";
    }
}

?>
