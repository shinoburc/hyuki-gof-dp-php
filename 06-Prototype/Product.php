<?php
/* $Id: Product.php 12 2005-03-21 14:06:41Z shinobu $ */

interface Product {
    public abstract function user($s);
    public abstract function createClone();
}

?>
