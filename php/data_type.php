<?php
$a = "gege";
$b = False;

var_dump($a);
var_dump($b);
echo "a $a \n";
$a = '';
if ($a) {
    echo "hello world\n";
} else {
    echo "not so good\n";
}
// $a = '';
// $b = 0;
// $c = false;
// $d = "0";

var_dump($a == false);
// var_dump($b == false);
// var_dump($c == false);
// var_dump($d == false);

class A
{
}
$c = new A();

var_dump($c);

// $f = (object)["key" => "value"];
// echo($f->key);

