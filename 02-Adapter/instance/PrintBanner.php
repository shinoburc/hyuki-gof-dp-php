<?php
/* $Id: PrintBanner.php 2 2005-03-21 10:27:51Z shinobu $ */

require_once "Print.php";
require_once "Banner.php";

class PrintBanner extends MyPrint {
    private $banner;

    public function PrintBanner($string) {
        $this->banner = new Banner($string);
    }

    public function printWeak(){
        $this->banner->showWithParen();
    }

    public function printStrong(){
        $this->banner->showWithAster();
    }
}

?>
