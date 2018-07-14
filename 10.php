<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>forma</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="cart" />
    <input type="submit" value="какая карта" >
</form>
<hr>
<?php
$int = $_POST['cart'];
if ($int >=6 && $int <=14)
{$arr_list = array ("6" => "шестерка", "7" => "семерка", "8" => "восьмерка", "9" => "девятка", "10" => "десятка", "11" => "валет", "12" => "дама", "13" => "король", "14" => "туз");
echo "Ваша карта: "."$arr_list[$int]";}
else {echo "нет такой карты";}


?>
</body>
</html>