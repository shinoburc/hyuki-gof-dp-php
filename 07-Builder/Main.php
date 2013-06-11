<?php
/* $Id: Main.php 14 2005-03-21 14:58:03Z shinobu $ */

require_once "Director.php";
require_once "HTMLBuilder.php";
require_once "TextBuilder.php";

if(count($argv) != 2){
    usage();
    exit(0);
}
if($argv[1] == "plain"){
    $director = new Director(new TextBuilder);
    $result = $director->construct();
    echo $result . "\n";
} else if($argv[1] == "html"){
    $director = new Director(new HTMLBuilder);
    $filename = $director->construct();
    echo $filename . "����������ޤ�����" . "\n";
} else {
    usage();
    exit(0);
}

function usage(){
    echo "Usage: php main.php plain  �ץ졼��ƥ����Ȥ�ʸ�����" . "\n";
    echo "Usage: php main.php html   HTML�ե������ʸ�����" . "\n";
}

?>
