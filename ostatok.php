<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>forma</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="int" placeholder="число" />
    <input type="text" name="delit" placeholder="делитель"  />
    <input type="submit" value="остаток от деления" >
</form>
<hr>
<?php
$int = $_POST['int'];
$delit = $_POST['delit'];
$ost = $int%$delit;
echo $ost;
?>
</body>
</html>