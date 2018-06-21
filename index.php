<?php 
if(isset($_GET['inicio'])){
		
		session_start();	
}

if(isset($_SESSION['email'])){

	//Encabezado de la pagina
	include ('views/front/templates/head.php');

	//validar errores
	if(isset($_GET['error'])){
		include ('views/errors/errors.php');
	}
?>

<div class="col-12" id="imagen">

	<figure>
		<img id="email" src="http://localhost/correo/public/images/email.png" id="img"><h2 id="register">Registro</h2></img>
	</figure>


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
						<input type="submit" class="boton" name="btn-register" value="Registrar usuario">
						<input type="reset" class="boton" value="Limpiar datos">
					</div>
				</form>
			<p><a href="http://localhost/correo/views/front/login.php" class="registrado">Ya estoy registrado!</a></p>
	</div>
</div>

<?php include ('views/front/templates/foot.php');

}else{
	header('Location: http://localhost/correo/index.php');
	}
?>