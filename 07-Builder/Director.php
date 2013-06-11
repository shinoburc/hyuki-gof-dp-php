<?php
/* $Id: Director.php 14 2005-03-21 14:58:03Z shinobu $ */

class Director {
    private $builder;

    public function Director($builder){
        $this->builder = $builder;
    }

    public function construct(){
        $this->builder->makeTitle("Greeting");
        $this->builder->makeString("ī������ˤ�����");
        $this->builder->makeItems( Array("���Ϥ褦�������ޤ���",
                                         "����ˤ��ϡ�"));
        $this->builder->makeString("���");
        $this->builder->makeItems( Array("����Ф�ϡ�",
                                         "���䤹�ߤʤ�����",
                                         "���褦�ʤ顣"));
        return $this->builder->getResult();
    }
}

?>
