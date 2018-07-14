<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>forma</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="grad" />
    <input type="submit" value="узнать количество часов по градусам" >
</form>
<hr>
<?php
$int = $_POST['grad'];
If ($int >= 0 && $int <= 360) {
$minut = $int*2/60;
echo "$int градус(а/ов) = $minut час(у/ам)";
}
else { echo "не корректное число градусов";}



?>
</body>
</html>