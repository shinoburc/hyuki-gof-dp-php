<?php
/* $Id: Properties.php 27 2005-04-03 09:19:10Z shinobu $ */

class Properties {
    private $filename;
    private $prop = Array();
    public function __construct(){
    }

    public function load($filename){
        $this->filename = $filename;
        $this->prop = parse_ini_file($filename);
    }

    public function getProperty($name){
        if(array_key_exists($name,$this->prop)){
            return $this->prop[$name];
        } else {
            return null;
        }
    }
}

?>
