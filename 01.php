<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>forma</title>
</head>
<body>
<form action="111.php" method="post">
    <input type="text" name="summ" id="summ" />
    <input type="submit" value="посчитать" >
</form>
<hr>
<?php
$int = $_POST['summ'];
$massiv = array();
for ($i = 0; $i<=strlen($int); $i++){
    array_push($massiv, $int{$i});
}
print_r ($massiv);
echo "sum(a) = " . array_sum($massiv) . "\n";
?>

</body>
</html>


