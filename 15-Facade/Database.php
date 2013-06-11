<?php
/* $Id: Database.php 27 2005-04-03 09:19:10Z shinobu $ */

require_once "Properties.php";

class Database {
    private function __construct(){
    }

    public static function getProperties($dbname){
        $filename = $dbname . ".txt";
        $prop = new Properties();
        try {
            $prop->load($filename);
        } catch (Exception $e){
            echo "Warning: " . $filename . " is not found.";
        }
        return $prop;
    }
}

?>
