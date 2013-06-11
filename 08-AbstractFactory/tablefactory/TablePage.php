<?php
/* $Id: TablePage.php 17 2005-03-21 16:43:20Z shinobu $ */

class TablePage extends Page {

    public function TablePage($title,$author){
        parent::__construct($title,$author);
    }

    public function makeHTML(){
        $buffer  = null;
        $buffer .= "<html><head><title>" . $this->title . "</title></head>\n";
        $buffer .= "<body>\n";
        $buffer .= "<h1>" . $this->title . "</h1>\n";
        $buffer .= "<table width=\"80%\" border=\"3\">\n";
        foreach($this->content as $item){
            $buffer .= "<tr>" . $item->makeHTML() . "</tr>";
        }
        $buffer .= "</table>\n";
        $buffer .= "<hr><address>" . $this->author . "</address>";
        return $buffer;
    }
}

?>
