<?php
/* $Id: Display.php 24 2005-04-03 06:04:57Z shinobu $ */

abstract class Display {
    public abstract function getColumns();
    public abstract function getRows();
    public abstract function getRowText($row);
    public final function show(){
        for ($i = 0; $i < $this->getRows(); $i++){
            echo $this->getRowText($i) . "\n";
        }
    }
}

?>
