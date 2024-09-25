<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<body>
    <form action="<?php print_r($_SERVER); ?>" method="post">
        <input type="text" name="name" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="submit">
    </form>

</body>

</html>