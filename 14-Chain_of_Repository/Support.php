<?php
/* $Id: Support.php 26 2005-04-03 07:24:16Z shinobu $ */

abstract class Support {
    private $name;
    private $next;

    public function __construct($name){
        $this->name = $name;
    }

    public function setNext($next){
        $this->next = $next;
        return $next;
    }

    public final function supportMethod($trouble){
        if($this->resolve($trouble)){
            $this->done($trouble);
        } else if ($this->next != null){
            $this->next->supportMethod($trouble);
        } else {
            $this->fail($trouble);
        }
    }

    public function toString(){
        return "[" . $this->name . "]";
    }

    protected abstract function resolve($trouble);
    protected function done($trouble){
        echo $trouble->toString() . " is resolved by " . $this->toString() . "." . "\n";
    }

    protected function fail($trouble){
        echo $trouble->toString() . " cannot be resolved." . "\n";
    }
}

?>
