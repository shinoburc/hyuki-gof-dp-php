<?php
/* $Id: Main.php 9 2005-03-21 13:06:39Z shinobu $ */

require_once "Singleton.php";

echo "Start." . "\n";
$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();

if($obj1 === $obj2){
    echo "obj1��obj2��Ʊ�����󥹥��󥹤Ǥ���" . "\n";
} else {
    echo "obj1��obj2��Ʊ�����󥹥��󥹤ǤϤ�ޤ���" . "\n";
}
echo "End." . "\n";

?>
