<h2 class="gris">Mis Datos</h2>
	<?php
		if(isset($_SESSION['email'])){ $email = $_SESSION['email'];}
		if(isset($_SESSION['usuario'])){ $nombre = $_SESSION['usuario'];}
		if(isset($_SESSION['genero'])){ $genero = $_SESSION['genero'];}
		if(isset($_SESSION['pass'])){ $pass = $_SESSION['pass'];}
	?>

	<form method="" name="" action="">

		<label>Nombre: </label><input class="inputform" type="email" value="<?php echo $nombre; ?>" readonly>
		<label>Genero: </label><input class="inputform" type="text" value="<?php echo $genero; ?>" readonly>
		<label>Email: </label><input class="inputform" type="text" value="<?php echo $email; ?>" readonly>
		<label>Contraseña: </label><input class="inputform" type="text" value="<?php echo $pass; ?>" readonly>

	</form>