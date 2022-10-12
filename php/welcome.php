<html>
<body>
welcome <?php echo $_GET["username"] . "<br/>" ?>
<?php echo $_GET["password"] ?>

<?php

echo "<br/>";
$cars = ["a","b","c"];
echo $cars[0]." next one ".$cars[1]."<br/>";

foreach ($cars as $car) {
    echo $car."<br/>";
}

?>

</body>
</html>
