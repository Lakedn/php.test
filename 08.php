<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>forma</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="minut" />
    <input type="submit" value="какой сигнал светофора" >
</form>
<hr>
<?php
$int = $_POST['minut'];
$ostatok = $int%5;
if ($ostatok >=3) {
    echo "красный";
}
else {echo "зеленый";}



?>
</body>
</html>