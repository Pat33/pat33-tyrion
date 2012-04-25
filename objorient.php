<?php

class Person {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getTitle() {
        return $this->getName()." the person";
    }

    public function sayHello() {
        echo "Hello, I'm ".$this->getTitle()."<br/>";
    }

    public function sayGoodbye() {
        echo "Goodbye from ".self::getTitle()."<br/>";
    }
}

class MODDY extends Person {
    public function __construct($name) {
        parent::__construct($name);
    }

    public function getTitle() {
        return $this->getName()." the Human Bean";
    }
}

$geekObj = new MODDY("Ludwig");
$geekObj->sayHello();
$geekObj->sayGoodbye();

$geekObj = new Person("Ludwig");
$geekObj->sayHello();
?>
