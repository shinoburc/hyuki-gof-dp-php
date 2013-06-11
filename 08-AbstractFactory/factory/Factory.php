<?php
/* $Id: Factory.php 17 2005-03-21 16:43:20Z shinobu $ */

abstract class Factory {
    public static function getFactory($classname){
        if(!class_exists($classname)){
            $factory = null;
            echo "���饹 " . $classname . " �����Ĥ���ޤ���" . "\n";
        } else {
            $factory = new $classname();
        }
        return $factory;
    }
    public abstract function createLink($caption, $url);
    public abstract function createTray($caption);
    public abstract function createPage($title, $author);
}

?>
