<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>forma</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="year" />
    <input type="submit" value="какой год" >
</form>
<hr>
<?php
$int = $_POST['year'];
if ($int >=1 && $int <=9999) {
    $ostatok = $int % 4;
    if ($ostatok == 0) {
        echo "високосный год";
    } else {
        echo "обычный год";
    }
}
else {echo "не корректное число";}


?>
</body>
</html>