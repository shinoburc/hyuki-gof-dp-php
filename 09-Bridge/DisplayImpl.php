<?php
/* $Id: DisplayImpl.php 19 2005-03-27 15:54:39Z shinobu $ */

abstract class DisplayImpl {
    public abstract function rawOpen();
    public abstract function rawPrint();
    public abstract function rawClose();
}

?>
