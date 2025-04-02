<?php

include("Html.php");
use Html\Table;
$table = new Table();
$table->title = "xiaohu";
$table->numRows = 10;
$table->message();


class Fruit
{
    public $name;
    public function __construct()
    {
        $this->name = ""; // 可以在构造函数中初始化
    }

    public function set_color($color) // 修改参数名称为 color
    {
        $this->name = $color; // 直接将参数赋值给 name 属性
    }

    public function get_color()
    {
        return $this->name; // 返回 name 属性的值
    }
}

$fruit = new Fruit();
$fruit->set_color("good"); // 设置颜色
echo $fruit->name; // 输出: good





