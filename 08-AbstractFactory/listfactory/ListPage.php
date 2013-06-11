<?php
/* $Id: ListPage.php 17 2005-03-21 16:43:20Z shinobu $ */

class ListPage extends Page {

    public function ListPage($title,$author){
        parent::__construct($title,$author);
    }

    public function makeHTML(){
        $buffer  = null;
        $buffer .= "<html><head><title>" . $this->title . "</title></head>\n";
        $buffer .= "<body>\n";
        $buffer .= "<h1>" . $this->title . "</h1>\n";
        $buffer .= "<ul>\n";
        foreach($this->content as $item){
            $buffer .= $item->makeHTML();
        }
        $buffer .= "</ul>\n";
        $buffer .= "<hr><address>" . $this->author . "</address>";
        $buffer .= "</body></html>\n";
        return $buffer;
    }
}

?>
