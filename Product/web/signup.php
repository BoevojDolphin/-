<?php
 require "db.php";
$data = $_POST;
if(trim($data['surname']) == '' )
    {
        $errors[] = 'введите Фамилию!';
    }
    if(trim($data['name']) == '' )
    {
        $errors[] = 'введите Имя!';
    }
 if($data['patronymic'] == '' )
    {
        $errors[] = 'введите Отчество!';
    }
    if($data['password_2'] == '' )
    {
        $errors[] = 'Повторный пароль введен не верно!';
    }
    if( R::count('users', 'email = ?',  array($data['email'])) > 0 )
    {
        $errors[] = 'Пользователь с таким Email уже существует!';
    }

   if(empty($errors)){  
     $user = R::dispense('user');
     $user->login = $data['login'];
     $user->email = $data['email'];
     $user-> password = password_hash($data['password'], 
     PASSWORD_DEFAULT);
     R::store($user);
    }
?>
<script scr="eel.js"></script>
 <form action="/signup.php" method="POST">
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="sign-in">
      <h1>Регистрация</h1>
      <h3>Ваше ФИО</h3>
      <input type="text" name="surname" placeholder="Фамилия"/>
      <input type="text" name="name" placeholder="Имя"/>
      <input type="text" name="patronymic" placeholder="Отчество"/>
      <h3>Email</h3>
      <input type="email" name="e-mail" placeholder="Почта" />
      <h3>Пароль</h3>
      <input type="password" name="password" placeholder="Пароль">
      <h3>Введите ваши паспортные данные:</h3>
      <input type="password" name="serial" placeholder="серия"/>
      <input type="password" name="number" placeholder="номер"/> 
      <a href="/login.php"><button type="submit" href="/login.php" style="width: 70%;">Вперёд!</button></a>
    </div>

    .
  </body>
</html>
 </form>
 