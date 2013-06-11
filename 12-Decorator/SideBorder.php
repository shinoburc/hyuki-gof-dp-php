<?php
/* $Id: SideBorder.php 24 2005-04-03 06:04:57Z shinobu $ */

require_once "Border.php";

class SideBorder extends Border {
    private $borderChar;

    public function __construct($display,$ch){
        parent::__construct($display);
        $this->borderChar = $ch;
    }

    public function getColumns(){
        return 1 + $this->display->getColumns() + 1;
    }

    public function getRows(){
        return $this->display->getRows();
    }

    public function getRowText($row){
        return $this->borderChar . $this->display->getRowText($row) . $this->borderChar;
    }
}

?>
