<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>forma</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="fio" id="summ" />
    <input type="submit" value="сократить" >
</form>
<hr>
<?php
$int = $_POST['fio'];
$array = explode(" ", $int);
echo $array[0]." ";
echo mb_substr($array[1], 0,1,'UTF-8').". ";
echo mb_substr($array[2], 0,1,'UTF-8').". ";


?>
</body>
</html>