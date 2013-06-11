<?php
/* $Id: FileTreatmentException.php 25 2005-04-03 06:46:02Z shinobu $ */

class FileTreatmentException extends exception {
    private $errorMessage = null;

    public function __construct(){
        parent::__construct();
    }
}

?>
