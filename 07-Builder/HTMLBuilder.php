<?php
/* $Id: HTMLBuilder.php 14 2005-03-21 14:58:03Z shinobu $ */

require_once "Builder.php";

class HTMLBuilder extends Builder {
    private $filename;
    private $writer;

    public function makeTitle($title){
        $this->filename = $title . ".html";
        try {
            $this->writer = fopen($this->filename,"w");
        } catch (Exception $e){
            print_r($e);
        }
        fwrite($this->writer,"<html><head><title>" . $title . "</title></head><body>" . "\n");
        fwrite($this->writer,"<h1>" . $title . "</h1>" . "\n");

    }

    public function makeString($str){
        fwrite($this->writer,"<p>" . $str . "</p>" . "\n");
    }

    public function makeItems($items){
        fwrite($this->writer,"<ul>" . "\n");
        foreach($items as $item){
            fwrite($this->writer,"<li>" . $item . "</li>" . "\n");
        }
        fwrite($this->writer,"</ul>" . "\n");
    }

    public function getResult(){
        fwrite($this->writer,"</body></html>" . "\n");
        fclose($this->writer);
        return $this->filename;
    }
}

?>
