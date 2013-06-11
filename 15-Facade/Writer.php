<?php
/* $Id: Writer.php 27 2005-04-03 09:19:10Z shinobu $ */

class Writer {
    private $filename;
    private $fd;

    public function __construct($filename){
        $this->filename = $filename;
        $this->fd = fopen($filename,"w");
    }

    public function write($str){
        fwrite($this->fd,$str);
    }

    public function close(){
        fclose($this->fd);
    }
}

?>
