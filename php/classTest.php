<?php

class Fruit
{
    public $name;
    public $color;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function set_color($color)
    {
        $this->color = $color;
    }
    public function get_name()
    {
        return $this->name;
    }
}

$fruit = new Fruit("apple");
$fruit_1 = new Fruit("orange");

echo $fruit->get_name() . "<br/>";

echo $fruit_1->get_name();



