<h2 class="gris">Mensaje</h2>

<form method="POST" name="form_mensaje" action="http://localhost/correo/app/Http/Controllers/Controller.php">

	<input class="inputform" type="email" name="to" placeholder="To" required>
	<input class="inputform" type="text" name="subject" placeholder="Subject" required>
	<textarea class="inputform" type="textarea" name="message" placeholder="message" required></textarea>

	<div>
		<p>
			<input class="boton" type="submit" name="enviar_mensaje" value="Enviar mensaje">
			<input class="boton" type="reset" value="Limpiar datos">	
		</p>
	</div>


</form>
