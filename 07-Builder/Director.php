<?php
/* $Id: Director.php 14 2005-03-21 14:58:03Z shinobu $ */

class Director {
    private $builder;

    public function Director($builder){
        $this->builder = $builder;
    }

    public function construct(){
        $this->builder->makeTitle("Greeting");
        $this->builder->makeString("朝から昼にかけて");
        $this->builder->makeItems( Array("おはようございます。",
                                         "こんにちは。"));
        $this->builder->makeString("夜に");
        $this->builder->makeItems( Array("こんばんは。",
                                         "おやすみなさい。",
                                         "さようなら。"));
        return $this->builder->getResult();
    }
}

?>
