<html>

<body>
    welcome <?php echo $_GET["username"] . "<br/>" ?>
    <?php echo $_GET["password"] ?>

    <?php

    echo "<br/>";
    $cars = ["a", "b", "c"];
    echo $cars[0] . " next one " . $cars[1] . "<br/>";

    for ($k = 0; $k < count($cars); $k++) {
        echo "" . $cars[$k];
    }


    $x = 5985;
    var_dump(is_int($x));


    ?>

</body>

</html>