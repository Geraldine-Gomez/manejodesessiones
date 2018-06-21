<h2>Inbox</h2>
<div>
  <div>
    <form method="POST" name="nuevomensaje" action="http://localhost/correo/app/Http/Controllers/Controller.php">

    <p>
        <label id="asunto">Asunto: </label><input id="nuevo" class="col-10" type="submit" name="btn-read" value="<?php echo $subject; ?>" class="btn-read">
    </p>
        <!-- Envio de datos ocultos -->
        <input type="hidden" name="genre" value="<?php echo $genre; ?>">
        <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
        <input type="hidden" name="correo" value="<?php echo $correo; ?>">
        <input type="hidden" name="to" value="<?php echo $to; ?>">
        <input type="hidden" name="subject" value="<?php echo $subject; ?>">
        <input type="hidden" name="message" value="<?php echo $message; ?>">
      </p>

    </form>
    <div id="marginnuevo">
        <div class="col-12 mensajes">
          <p>Mensaje anterior</p>
        </div>
        <div class="col-12 mensajes">
          <p>Mensaje anterior</p>
        </div>
        <div class="col-12 mensajes">
          <p>Mensaje anterior</p>
        </div>
        <div class="col-12 mensajes">
          <p>Mensaje anterior</p>
        </div>
        <div class="col-12 mensajes">
          <p>Mensaje anterior</p>
        </div>
    </div>
  </div>
</div>