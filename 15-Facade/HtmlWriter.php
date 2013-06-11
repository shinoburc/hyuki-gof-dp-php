<?php
/* $Id: HtmlWriter.php 27 2005-04-03 09:19:10Z shinobu $ */

class HtmlWriter {
    private $writer;

    public function __construct($writer){
        $this->writer = $writer;
    }

    public function title($title){
        $this->writer->write("<html>");
        $this->writer->write("<head>");
        $this->writer->write("<title>" . $title . "</title>");
        $this->writer->write("</head>");
        $this->writer->write("<body>\n");
        $this->writer->write("<h1>" . $title . "</h1>");
    }

    public function paragraph($msg){
        $this->writer->write("<p>" . $msg . "</p>\n");
    }

    public function link($href,$caption){
        $this->paragraph("<a href=\"" . $href . "\">" . $caption . "</a>");
    }

    public function mailto($mailaddr,$username){
        $this->link("mailto:" . $mailaddr,$username);
    }

    public function close(){
        $this->writer->write("</body>");
        $this->writer->write("</html>\n");
        $this->writer->close();
    }
}

?>
