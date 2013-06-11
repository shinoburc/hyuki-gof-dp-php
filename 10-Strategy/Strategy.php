<?php
/* $Id: Strategy.php 20 2005-03-27 17:02:23Z shinobu $ */

interface Strategy {
    public abstract function nextHand();
    public abstract function study($win);
}

?>
