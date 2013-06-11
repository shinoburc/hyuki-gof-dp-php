<?php
/* $Id: PageMaker.php 27 2005-04-03 09:19:10Z shinobu $ */

require_once "Database.php";
require_once "Writer.php";
require_once "HtmlWriter.php";

class PageMaker {
    private function __construct(){
    }

    public function makeWelcomePage($mailaddr,$filename){
        try {
            $mailprop = Database::getProperties("maildata");
            $username = $mailprop->getProperty($mailaddr);
            $writer = new HtmlWriter(new Writer($filename));
            $writer->title("Welcome to " . $username . "'s page!");
            $writer->paragraph($username . "のページへようこそ。");
            $writer->paragraph("メールまっていますね。");
            $writer->mailto($mailaddr,$username);
            $writer->close();
            echo $filename . " is created for " . $mailaddr . " (" . $username . ")" . "\n";
        } catch (Exception $e){
            print_r($e->getTrace());
        }
    }
}

?>
