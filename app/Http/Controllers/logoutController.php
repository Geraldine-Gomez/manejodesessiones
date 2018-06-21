<?php
//Crear sesión
session_start();
//Vaciar sesión
$_SESSION = array();
//Destruir sesión
session_destroy();
//Redireccionar a login.php
header("location: http://localhost/correo/index.php");