<?php
/* $Id: LimitSupport.php 26 2005-04-03 07:24:16Z shinobu $ */

require_once "Support.php";

class LimitSupport extends Support {
    private $limit;
    public function __construct($name,$limit){
        parent::__construct($name);
        $this->limit = $limit;
    }

    protected function resolve($trouble){
        if($trouble->getNumber() < $this->limit){
            return true;
        } else {
            return false;
        }
    }
}

?>
