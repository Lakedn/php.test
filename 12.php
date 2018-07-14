<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>forma</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="int" />
    <input type="submit" value="вычислить квадраты" >
</form>
<hr>
<?php
$int = $_POST['int'];
echo "$i";
for ($i=1; $i <= $int; $i++){
    $step = pow($i, $i);
    echo ($i>1 ?  " + ": " ");
    echo "$step";
    $sum += $step;
}
echo "= $sum";
?>
</body>
</html>