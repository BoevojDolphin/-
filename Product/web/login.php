<?php
 require 'db.php';
$data = $_POST;
?>
<?php
include 'gaga.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Войти</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="sign-in">
      <h1>Вход</h1>
      <input type="text" placeholder="Почта" />
      <input type="password" placeholder="Пароль" />
      <a href="/office.php"><button type="submit" name="do_login" style="width: 70%;">Войти</button></a>
      <a href="/signup.php"><button type="submit" name="signup" style="width: 70%;">Регистрация</button></a>
    </div>

    .
  </body>
</html>