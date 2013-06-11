<?php
/* $Id: Iterator.php 2 2005-03-21 10:27:51Z shinobu $ */

interface MyIterator {
    /* boolean */
    public abstract function hasNext();
    /* object */
    public abstract function next();
}

?>
