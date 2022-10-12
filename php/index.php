<?php
include "Html.php";
use Html\Table;
$table = new Table();
$table->title = "elderly";
$table->numRows = 8;
?>

<html>
<body>
<?php echo  $table->message() ?>
</body>
</html>