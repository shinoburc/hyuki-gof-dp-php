<?php
/* $Id: PrintBanner.php 2 2005-03-21 10:27:51Z shinobu $ */

require_once "Banner.php";
require_once "Print.php";

class PrintBanner extends Banner implements MyPrint {

    public function PrintBanner($string){
        /* super($string) */
        parent::__construct($string);
    }

    public function printWeak(){
        $this->showWithParen();
    }

    public function printStrong(){
        $this->showWithAster();
    }
}

?>
