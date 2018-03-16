<?php
class Greeting {
    function __construct() {
        $this->msg = "Hello";
        $this->target = "World";
    }

    function say_hello() {
        echo $this->msg." ".$this->target."\n";
    }
}

class Hello extends Greeting {
    function say_hello() {
        parent::say_hello();
        echo "WA HA HA HA\n";
    }
}

$hello = new Hello();
$hello->say_hello();
