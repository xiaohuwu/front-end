<?php
include "Html.php";
$table = new Html\Table();
$table->title = "elderly";
$table->numRows = 8;

$cars = ["a", "b", "c"];

for ($k = 0; $k < count( $cars); $k++) {
    echo "" . $cars[$k];
}

?>

<html>
<body>
<?php echo  $table->message() ?>
</body>
</html>