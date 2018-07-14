<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>forma</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="year" />
    <input type="submit" value="какой год по китайскому календарю" >
</form>
<hr>
<?php
$int = $_POST['year'];
if ($int >= 1924 && $int <= 9999) {
    $int -= 1924;
    $arr_year = array("0" => "крысы", "1" => "быка", "2" => "тигра", "3" => "кролика", "4" => "дракона", "5" => "змеи", "6" => "лошади", "7" => "овцы", "8" => "обезьяны", "9" => "петуха", "10" => "собаки", "11" => "свиньи");
    $list_year = $int % 12;
    echo "Это год " . "$arr_year[$list_year]";
}
else {echo "Не корректное число";}
?>
</body>
</html>