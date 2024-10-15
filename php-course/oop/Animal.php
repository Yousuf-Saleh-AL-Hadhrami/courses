<?php 

abstract class Animal {

    public $name;
    public $color;


    abstract public function setName($name);

    abstract public function setColor($color);


    public function getName() {

        return $this->name;
    }

    public function getColor() {

        return $this->color;
    }

}


class Cat extends Animal {

    public function setName($name) {

        $this->name = $name;

        return $this;
    }

    public function setColor($color) {

        $this->color = $color;
        return $this;
    }
}



$cat = new Cat();

echo $cat->setColor("black")->getColor();
