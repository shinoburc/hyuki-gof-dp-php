<?php
/* $Id: Main.php 24 2005-04-03 06:04:57Z shinobu $ */

require_once "StringDisplay.php";
require_once "SideBorder.php";
require_once "FullBorder.php";

$b1 = new StringDisplay("Hello, world.");
$b2 = new SideBorder($b1,'#');
$b3 = new FullBorder($b2);

$b1->show();
$b2->show();
$b3->show();

$b4 = new SideBorder(
        new FullBorder(
            new FullBorder(
                new SideBorder(
                    new FullBorder(
                        new StringDisplay("こんにちは。")
                    ),
                    '*'
                )
            )
        ),
        '/'
    );
$b4->show();

?>
