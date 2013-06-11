<?php
/* $Id: Singleton.php 10 2005-03-21 13:15:22Z shinobu $ */

/* ����åɥ����դǤʤ� */

class Singleton {
    private static $singleton = null;

    private function __construct(){
        echo "���󥹥��󥹤��������ޤ�����" . "\n";
    }

    public static function getInstance(){
        if(is_null(self::$singleton)){
            self::$singleton = new Singleton();
        }
        return self::$singleton;
    }
}

?>
