<?php
/* $Id: ListVisitor.php 25 2005-04-03 06:46:02Z shinobu $ */

require_once "Visitor.php";

class ListVisitor extends Visitor {
    private $currentDir = "";

    public function visit($file){
        if(get_class($file) == "MyFile"){
            echo $this->currentDir . "/" . $file->toString() . "\n";
        } else if(get_class($file) == "MyDirectory"){
            $directory = $file;
            echo $this->currentDir . "/" . $directory->toString() . "\n";
            $savedir = $this->currentDir;
            $this->currentDir = $this->currentDir . "/" . $directory->getName();
            foreach($directory->iterator() as $entry){
                $entry->accept($this);
            }
            $this->currentDir = $savedir;
        }
    }
}

?>
