<?php

class animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

class dog extends animal {
    public function makesound () {
        return "woof!";
    }
}

class cat extends animal {
    public function makesound () {
        return "meoow ";
    }
} 

$dog = new dog("Buddy");
echo $dog->getName() . "says" . $dog->makesound();