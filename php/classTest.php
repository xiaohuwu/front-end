<?php
class Fruit
{
    public $name;
    
    public function __construct()
    {
    }

    public function set_color($name)
    {
        $this->name = $name;
    }

    public function get_color()
    {
        return $this->name;
    }

}

$fruit = new Fruit();
$fruit->set_color("good");
echo $fruit->get_color();

