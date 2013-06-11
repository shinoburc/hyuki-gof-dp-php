<?php
/* $Id: FileTreatmentException.php 23 2005-04-03 05:14:55Z shinobu $ */

class FileTreatmentException extends exception {
    private $errorMessage = null;

    public function __construct(){
        parent::__construct();
    }
}

?>
