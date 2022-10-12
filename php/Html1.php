<?php
$highlight = true;
?>

<html>
<body>
<p <?= $highlight ? "class='highlight'" : '' ?> >
    this is paragrph
</p>
</body>
</html>

<style>
    .highlight{
        border: solid 1px red;
    }
</style>