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

for ($i = 20; $i<=45; $i++){
    if ($i%5){}
    else
        {
            $summ += $i;
        }
}
echo "<br>".$summ;
?>

</body>
</html>


