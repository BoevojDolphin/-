<!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_surname" value="<?=$value['surname'] ?>" placeholder="Фамилия">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_name" value="<?=$value['name'] ?>" placeholder="Имя">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_patronymic" value="<?=$value['patronymic'] ?>" placeholder="Отчество">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_password" value="<?=$value['password'] ?>" placeholder="Пароль">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_email" value="<?=$value['email'] ?>" placeholder="Почта">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_serial" value="<?=$value['serial'] ?>" placeholder="серия">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_number" value="<?=$value['number'] ?>" placeholder="номер">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_a1" value="<?=$value['a1'] ?>" placeholder="дата/место рождения">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_a2" value="<?=$value['a2'] ?>" placeholder="пол">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_a3" value="<?=$value['a3'] ?>" placeholder="образование">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_a4" value="<?=$value['a4'] ?>" placeholder="хобби">
        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div><!-- Modal Edit-->
<div class="modal fade" id="editModal<?=$value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content shadow">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись № <?=$value['id'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="?id=<?=$value['id'] ?>" method="post">
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_surname" value="<?=$value['surname'] ?>" placeholder="Фамилия">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_name" value="<?=$value['name'] ?>" placeholder="Имя">
        	</div>
        	<div class="form-group">
        		<input type="text" class="form-control" name="edit_patronymic" value="<?=$value['patronymic'] ?>" placeholder="Отчество">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_password" value="<?=$value['password'] ?>" placeholder="Пароль">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_email" value="<?=$value['email'] ?>" placeholder="Почта">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_serial" value="<?=$value['serial'] ?>" placeholder="серия">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_number" value="<?=$value['number'] ?>" placeholder="номер">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_a1" value="<?=$value['a1'] ?>" placeholder="дата/место рождения">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_a2" value="<?=$value['a2'] ?>" placeholder="пол">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_a3" value="<?=$value['a3'] ?>" placeholder="образование">
        	</div>
          <div class="form-group">
        		<input type="text" class="form-control" name="edit_a4" value="<?=$value['a4'] ?>" placeholder="хобби">
        	</div>
        	<div class="modal-footer">
        		<button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
        	</div>
        </form>	
      </div>
    </div>
  </div>
</div>