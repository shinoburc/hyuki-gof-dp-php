<?php
/* $Id: Builder.php 14 2005-03-21 14:58:03Z shinobu $ */

abstract class Builder {
    public abstract function makeTitle($title);
    public abstract function makeString($str);
    public abstract function makeItems($items);
    public abstract function getResult();
}

?>
