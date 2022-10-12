<?php
class Fruit{
    public $name;
    public $color;

    public function set_name($name){
        $this->name = $name;
    }

    public function set_color($color){
        $this->color = $color;
    }

    public function get_name() {
        return $this->name;
    }

}

$fruit = new Fruit();
$fruit_1 = new Fruit();

$fruit->set_name("apple");
$fruit_1->set_name("orange");

echo $fruit->get_name()."<br/>";

echo $fruit_1->get_name();



