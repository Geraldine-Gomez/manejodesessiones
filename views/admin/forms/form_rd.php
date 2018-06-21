<h2>¡Nuevo mensaje!</h2>

	<form name="register" method="post" action="http://localhost/correo/app/Http/Controllers/Controller.php">
			<p>
				<input class="inputform" type="email" value="<?php echo $subject; ?>" readonly>
			</p>
			<p>
				<input class="inputform" type="text" value="<?php echo $to; ?>" readonly>
			</p>
			<p>
				<textarea class="inputform" rows="5" cols="100" readonly><?php echo $message; ?></textarea>
			</p>
		
	</form>