<div class="row">
	<div class="col-md-12">
		<a href="index.php?view=newuser" class="btn btn-default pull-right"><i class='glyphicon glyphicon-user'></i> Nuevo usuario</a>
		<h1>Lista de usuarios</h1>
		<br>
		<?php
		/*
		$u = new UserData();
		print_r($u);
		$u->name = "Melvin";
		$u->lastname = "Rordriguez";
		$u->email = "melvin.r.a.cr@gmail.com";
		$u->password = sha1(md5("melvin9588"));
		$u->add();
		$f = $u->createForm();
		print_r($f);
		echo $f->label("name")." ".$f->render("name");
		*/
		?>
		<?php
		$users = UserData::getAll();
		if(count($users)>0) {
			// si hay usuarios
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre completo</th>
			<th>Nick</th>
			<th>Email</th>
			<th>Activo</th>
			<th>Admin</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user) {
				?>
				<tr>
				<td><?php echo $user->name." ".$user->lastname; ?></td>
				<td><?php echo $user->email; ?></td>
				<td><?php echo $user->username; ?></td>
				<td>
					<?php if($user->is_active):?>
					<i class="glyphicon glyphicon-ok"></i>
				<?php endif; ?>
			</td>
			<td>
				<?php if($user->is_admin):?>
				<i class="glyphicon glyphicon-ok"></i>
			<?php endif; ?>
		</td>
		<td style="width:30px;"><a href="index.php?view=edituser&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a></td>
		</tr>
		<?php
		}
		} else {
			//No hay usuarios
		}
		?>
	</div>
</div>