<?php
/* $Id: Hand.php 23 2005-04-03 05:14:55Z shinobu $ */

class Hand {
    public static $HANDVALUE_GUU = 0;
    public static $HANDVALUE_CHO = 1;
    public static $HANDVALUE_PAA = 2;
    public static $hand = null;
    public static $name = Array("グー","チョキ","パー");
    private $handvalue;

    private function __construct($handvalue){
        $this->handvalue = $handvalue;
    }

    public static function init(){
        $GUU = new Hand(self::$HANDVALUE_GUU);
        $CHO = new Hand(self::$HANDVALUE_CHO);
        $PAA = new Hand(self::$HANDVALUE_PAA);
        self::$hand = Array($GUU,$CHO,$PAA);
    }

    public static function getHand($handvalue){
        if(is_null(self::$hand)){
            $GUU = new Hand(self::$HANDVALUE_GUU);
            $CHO = new Hand(self::$HANDVALUE_CHO);
            $PAA = new Hand(self::$HANDVALUE_PAA);
            self::$hand = Array($GUU,$CHO,$PAA);
        }
        return self::$hand[$handvalue];
    }

    public function isStrongerThan($h){
        return $this->fight($h) == 1;
    }

    public function isWeakerThan($h){
        return $this->fight($h) == -1;
    }

    private function fight($h){
        if($this == $h){
            return 0;
        } else if(($this->handvalue + 1) % 3 == $h->handvalue){
            return 1;
        } else {
            return -1;
        }
    }

    public function toString(){
        return $this->name[$this->handvalue];
    }
    
}

?>
