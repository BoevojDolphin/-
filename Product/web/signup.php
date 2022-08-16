<?php
 include 'db.php';

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
    <!-- Modal -->
  <div class="sign-in" tabindex="-1" role="dialog" id="Modal">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content shadow">
	      <div class="modal-body">
	        <form action="" method="post">
          <h1>Регистрация</h1>
      <h3>Ваше ФИО</h3>
      <div class="form-group">
      <input type="text" class="form-control" name="surname" value="" placeholder="Фамилия"/>
      </div>
      <div class="form-group">
      <input type="text" class="form-control" name="name" value="" placeholder="Имя"/>
      </div>
      <div class="form-group">
      <input type="text" class="form-control" name="patronymic" value="" placeholder="Отчество"/>
      </div>
      <h3>Email</h3>
      <div class="form-group">
      <input type="email" class="form-control" name="email" value="" placeholder="Почта" />
      </div>
      <h3>Пароль</h3>
      <div class="form-group">
      <input type="password" class="form-control" name="password" value="" placeholder="Пароль">
      </div>
      <h3>Введите ваши паспортные данные:</h3>
      <div class="form-group">
      <input type="password" class="form-control" name="serial" value="" placeholder="серия"/>
      </div>
      <div class="form-group">
      <input type="password" class="form-control" name="number" value="" placeholder="номер"/> 
      </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
	        <a href="/login.php"><button type="submit" name="submit" class="btn btn-primary">Добавить</button></a>
	      </div>
	  		</form>
	    </div>
	  </div>
	</div>

    .
  </body>
</html>
</form>
