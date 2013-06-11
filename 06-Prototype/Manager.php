<?php
/* $Id: Manager.php 12 2005-03-21 14:06:41Z shinobu $ */

class Manager {
    private $showcase = Array();

    public function register($name,$proto){
        $this->showcase["$name"] = $proto;
    }

    public function create($protoname){
        $p = $this->showcase["$protoname"];
        return $p->createClone();
    }
}

?>
