<?php

trait SomeLogic {
    public $prop;
    
    public function method(){
        echo $this->prop;
    }
}

trait SomeLogic2 {
    public $prop2;
    
    public function method2(){
        echo $this->prop2;
    }
}


class Something {
    use SomeLogic, SomeLogic2;
}

class SomethingElse {
    use SomeLogic;
}

$obj = new Something();
$obj->method();
$obj->method2();