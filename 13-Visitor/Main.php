<?php
/* $Id: Main.php 25 2005-04-03 06:46:02Z shinobu $ */

require_once "MyDirectory.php";
require_once "MyFile.php";
require_once "ListVisitor.php";

try {
    echo "Making root entries..." . "\n";
    $rootdir = new MyDirectory("root");
    $bindir = new MyDirectory("bin");
    $tmpdir = new MyDirectory("tmp");
    $usrdir = new MyDirectory("usr");

    $rootdir->add($bindir);
    $rootdir->add($tmpdir);
    $rootdir->add($usrdir);

    $bindir->add(new MyFile("vi", 10000));
    $bindir->add(new MyFile("latex", 20000));
    $rootdir->accept(new ListVisitor());

    echo "\n";
    echo "Making user entries..." . "\n";
    $yuki = new MyDirectory("yuki");
    $hanako = new MyDirectory("hanako");
    $tomura = new MyDirectory("tomura");

    $usrdir->add($yuki);
    $usrdir->add($hanako);
    $usrdir->add($tomura);
    $yuki->add(new MyFile("diary.html",100));
    $yuki->add(new MyFile("Composite.php",200));
    $hanako->add(new MyFile("memo.tex",300));
    $tomura->add(new MyFile("game.doc",400));
    $tomura->add(new MyFile("junk.mail",500));
    $rootdir->accept(new ListVisitor());
} catch (FileTreatmentException $e){
        print_r($e->getTrace());
}

?>
