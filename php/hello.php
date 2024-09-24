<?php
//$a = 1;
//$b = 2;
//$c = $a + $b;
//echo $c;
//$car = array("a","b","c");
//echo $car[0];


$fruits = array (
   "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
   "numbers" => array(1, 2, 3, 4, 5, 6),
   "holes"   => array("first", 5 => "second", "third")
);


// foreach($fruits as $key => $value){
//    echo "key:".$key."  value:".json_encode($value);
// }

//echo json_encode($fruits);

$good = array( "man" => 60, "woman" =>30);
$room = array( "001","002" );
foreach ($room as  $value) {
    echo "item : " . $value . "<br>/";
}


$numbers = [1, 2, 3, 4];
$squared = array_map(function($num) {
    return $num * $num;
}, $numbers);

// print_r($squared); // 输出: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 )

// echo "item : " . ($squared[0]);

?>
