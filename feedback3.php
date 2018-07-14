<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>Форма обратной связи</title>
</head>
<body>
<h1>Форма обратной связи 123</h1>
<form action="" method="post">
    <input type="text" name="name" placeholder="Введите Имя" />
    <input type="text" name="email" placeholder="Введите e-mail" />
    <input type="text" name="subject" placeholder="Введите тему" />
    <textarea name="message" placeholder="Введите сообщение" ></textarea>
    <input type="hidden" name="admin" value="laked@mail.ru">
    <input type="submit" value="вычислить квадраты" >
</form>
<hr>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$to = $_POST['admin'];
$subject = $_POST['subject']. ". От $name ($email).";
$message = str_replace("\n.", "\n..", $_POST['message']);
$header = 'From:'. $name . ' - ' . $email  . "\r\n" .
    'Reply-To:'. $to . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail ($to,$subject,$message,$header);
?>
</body>
</html>