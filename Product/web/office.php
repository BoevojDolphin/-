<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Личный кабинет</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col mt-1">
				<?=$success ?>
				<table class="table shadow ">
					<thead class="thead-dark">
						<tr>
						    <th>Фамилия</th>
							<th>Имя</th>
							<th>Отчество</th>
							<th>Пароль</th>
						</tr>
						<?php foreach ($result as $value) { ?>
						<tr>
							<td><?=$value['surname'] ?></td>
							<td><?=$value['name'] ?></td>
							<td><?=$value['patronymic'] ?></td>
							<td><?=$value['password'] ?></td>
							<td>
								<a href="?edit=<?=$value['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$value['id'] ?>"><i class="fa fa-edit"></i></a> 
								<?php require 'modal.php'; ?>
							</td>
						</tr> <?php } ?>
						<tr>
							<th>Почта</th>
							<th>серия паспорта</th>
							<th>номер паспорта</th>
						</tr>
						<?php foreach ($result as $value) { ?>
						<tr>
							<td><?=$value['email'] ?></td>
							<td><?=$value['serial'] ?></td>
							<td><?=$value['number'] ?></td>
							<td>
								<a href="?edit=<?=$value['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$value['id'] ?>"><i class="fa fa-edit"></i></a> 
								<?php require 'modal.php'; ?>
							</td>
						</tr> <?php } ?>
						<tr>
						    <th>дата/место рождения</th>
							<th>пол</th>
							<th>образование</th>
							<th>хобби</th>
						</tr>
						<?php foreach ($result as $value) { ?>
						<tr>
							<td><?=$value['a1'] ?></td>
							<td><?=$value['a2'] ?></td>
							<td><?=$value['a3'] ?></td>
							<td><?=$value['a4'] ?></td>
							<td>
								<a href="?edit=<?=$value['id'] ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editModal<?=$value['id'] ?>"><i class="fa fa-edit"></i></a> 
								<?php require 'modal.php'; ?>
							</td>
						</tr> <?php } ?>
					</thead>
				</table>
			</div>
		</div>
	</div>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 </body>
</html>