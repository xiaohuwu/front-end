<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
error_log("$actual_link\n", 3, "./php.log");

$apple=$_POST['apple'];
$pig=$_POST['pig'];
$biscuit=$_POST['biscuit'];

$apple = (float)$apple * 2.6;

error_log("Failed to connect to database!", 1);

error_log("Error message\n", 3, "./php.log");

$pig =(float)$pig * 13.2;
$biscuit =(float)$biscuit * 21;
$sum = $apple + $pig + $biscuit;

?>
<!DOCTYPE  html PUBLIC   "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>我的第一个PHP程序</title>
    <style>
        table {
            background:#ccc;
            width:200px;
            margin:20px auto;
        }
        table td {
            background:#fff;
        }
    </style>
</head>
<body>
<form method="post" action="postorder.php">
    <table>
        <tr><td>您的商品</td><td>价格</td><td>小记</td></tr>
        <tr><td>苹果</td><td>2.6元/斤</td><td><?php echo $apple ?></td></tr>
        <tr><td>猪肉</td><td>13.2元/斤</td><td><?php echo $pig ?></td></tr>
        <tr><td>饼干</td><td>21元/盒</td><td><?php echo $biscuit ?></td></tr>
        <tr><td colspan="3" align="center">一共要支付<?php echo $sum ?> 元[<a href="orderform.php">返回修改</a>]</td></tr>
    </table>
</form>
</body>
</html>