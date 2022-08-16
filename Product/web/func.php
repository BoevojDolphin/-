<?php
include 'db.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$patronymic = $_POST['patronymic'];
$password = $_POST['password'];
$email = $_POST['email'];
$serial = $_POST['serial'];
$number = $_POST['number'];
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];
$a4 = $_POST['a4'];

// Create

if (isset($_POST['submit'])) {
	$sql = ("INSERT INTO `users`(`name`, `surname`, `patronymic`, `password`, `email`, `serial`, `number`, `a1`, `a2`, `a3`, `a4` ) VALUES(?,?,?)");
	$query = $pdo->prepare($sql);
	$query->execute([$name, $surname, $patronymic, $password, $email, $serial, $number, $a1, $a2, $a3, $a4]);
	$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
	
}

// Read

$sql = $pdo->prepare("SELECT * FROM `users`");
$sql->execute();
$result = $sql->fetchAll();

// Update
$edit_name = $_POST['edit_name'];
$edit_surname = $_POST['edit_surname'];
$edit_patronymic = $_POST['edit_patronymic'];
$edit_password = $_POST['edit_password'];
$edit_email = $_POST['edit_email'];
$edit_serial = $_POST['edit_serial'];
$edit_number = $_POST['edit_number'];
$edit_a1 = $_POST['edit_a1'];
$edit_a2 = $_POST['edit_a2'];
$edit_a3 = $_POST['edit_a3'];
$edit_a4 = $_POST['edit_a4'];
$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
	$sqll = "UPDATE users SET name=?, surname=?, patronymic=?, password=?, email=?, serial=?, number=?, a1=?, a2=?, a3=?, a4=? WHERE id=?";
	$querys = $pdo->prepare($sqll);
	$querys->execute([$edit_name, $edit_surname, $edit_patronymic, $edit_password, $edit_email, $edit_serial, $edit_number, $edit_a1, $edit_a2, $edit_a3, $edit_a4, $get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

// DELETE
if (isset($_POST['delete_submit'])) {
	$sql = "DELETE FROM users WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}
