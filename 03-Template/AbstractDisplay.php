<?php
/* $Id: AbstractDisplay.php 4 2005-03-21 12:00:34Z shinobu $ */

abstract class AbstractDisplay {
    public abstract function open();
    public abstract function myPrint();
    public abstract function close();
    public final function display(){
        $this->open();
        for($i = 0; $i < 5; $i++){
            $this->myPrint();
        }
        $this->close();
    }
}

?>
