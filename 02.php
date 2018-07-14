<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>forma</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="list" />
    <input type="submit" value="сколько пятерок" >
</form>
<hr>
<?php
$int = $_POST['list'];
$z = 0;
for ($i = 0; $i<=strlen($int); $i++){
    if ($int{$i} == "5"){
        $z++;
    }
}
echo "<br>".$int;
echo "<br>".$z;
?>

</body>
</html>


