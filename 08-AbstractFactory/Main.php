<?php
/* $Id: Main.php 17 2005-03-21 16:43:20Z shinobu $ */

require_once "factory/Factory.php";
require_once "factory/Item.php";
require_once "factory/Link.php";
require_once "factory/Page.php";
require_once "factory/Tray.php";

require_once "listfactory/ListFactory.php";
require_once "listfactory/ListLink.php";
require_once "listfactory/ListPage.php";
require_once "listfactory/ListTray.php";

require_once "tablefactory/TableFactory.php";
require_once "tablefactory/TableLink.php";
require_once "tablefactory/TablePage.php";
require_once "tablefactory/TableTray.php";

if(count($argv) != 2){
    echo "Usage: php Main.php class.name.of.ConcreteFactory" . "\n";
    echo "Example 1: php Main.php ListFactory" . "\n";
    echo "Example 2: php Main.php TableFactory" . "\n";
    exit(0);
}

$factory = Factory::getFactory($argv[1]);

$asahi = $factory->createLink("朝日新聞","http://www.asahi.com/");
$yomiuri = $factory->createLink("読売新聞","http://www.yomiuri.co.jp/");

$us_yahoo = $factory->createLink("Yahoo!","http://www.yahoo.com/");
$jp_yahoo = $factory->createLink("Yahoo!Japan","http://www.yahoo.co.jp/");
$excite = $factory->createLink("Excite","http://www.excite.com/");
$google = $factory->createLink("Google","http://www.google.com/");

$traynews = $factory->createTray("新聞");
$traynews->add($asahi);
$traynews->add($yomiuri);

$trayyahoo = $factory->createTray("Yahoo!");
$trayyahoo->add($us_yahoo);
$trayyahoo->add($jp_yahoo);

$traysearch = $factory->createTray("サーチエンジン");
$traysearch->add($trayyahoo);
$traysearch->add($excite);
$traysearch->add($google);

$page = $factory->createPage("LinkPage","結城 浩");
$page->add($traynews);
$page->add($traysearch);
$page->output();

?>
