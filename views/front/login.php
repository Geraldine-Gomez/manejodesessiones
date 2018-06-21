<?php include ('templates/head.php'); ?>

	<div class="row">

		<div class="col-12 registro">
			<h2 class="gris">Formulario de Ingreso</h2>
				<form name="login" method="post" action="http://localhost/correo/app/Http/Controllers/Auth/AuthController.php">
					<input class="inputform" type="email" name="correo_log" placeholder="Correo electronico.." required>
					<input class="inputform" type="password" name="pass_log" placeholder="Contraseña.." required>

					<!-- Envio de datos ocultos -->
					<input class="inputform" type="hidden" name="genre" value="<?php echo $genre; ?>">
					<input class="inputform" type="hidden" name="nombre" value="<?php echo $nombre; ?>">
					<input class="inputform" type="hidden" name="correo" value="<?php echo $correo; ?>">
					<input class="inputform" type="hidden" name="password" value="<?php echo $password; ?>">
				<div id="btn-marginlog">
					<input class="boton" type="submit" name="btn-login" value="Ingresar">
					<input class="boton" type="reset" value="Cancelar">
				</div>
				</form>
		</div>

	</div>

<?php include ('templates/foot.php'); ?>