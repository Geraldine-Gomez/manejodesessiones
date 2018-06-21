<?php include ('templates/head.php'); ?>

	<div class="row">
	<div class="col-12 registro">
				
		<h2 class="gris">Formulario de Registro</h2>
		<form name="register" method="post" action="http://localhost/correo/app/Http/Controllers/registroController.php">
			<p>
				<select name="genre" class="inputgenero" required>
					<option value="hombre">Hombre</option>
					<option value="mujer">Mujer</option>
					<option value="genero" selected>Genero</option>
				</select>
			</p>
					
			<input class="inputform" type="text" name="nombre" placeholder="Nombre completo.." required>
			<input class="inputform" type="email" name="correo" placeholder="Correo electronico.." required>
			<input class="inputform" type="password" name="password" placeholder="Contraseña.." required>
			<input class="inputform" type="password" name="conf_pass" placeholder="Confirmar contraseña.." required>
		<div id="btn-margin">
			<input type="submit" name="btn-register" class="boton" value="Registrar usuario">
			<input type="reset" class="boton" value="Limpiar datos">
		</div>
		</form>

	</div>
	</div>

<?php include ('templates/foot.php'); ?>