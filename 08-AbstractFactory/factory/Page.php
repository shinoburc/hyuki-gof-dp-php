<?php
/* $Id: Page.php 17 2005-03-21 16:43:20Z shinobu $ */

abstract class Page {
    protected $title;
    protected $author;
    protected $content = Array();

    public function Page($title,$author){
        $this->title = $title;
        $this->author = $author;
    }

    public function add($item){
        $this->content[] = $item;
    }

    public function output(){
        try {
            $filename = $this->title . ".html";
            $writer = fopen($filename,"w");
            fwrite($writer,$this->makeHTML());
            echo $filename . " を作成しました。" . "\n";
        } catch (Exception $e){
            print_r($e);
        }
    }

    public abstract function makeHTML();
}

?>
