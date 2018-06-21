<?php 
//Creamos sesión
session_start();

if(isset($_SESSION['email'])){

	//Mensaje enviado
	if(isset($_POST['enviar_mensaje'])){
		
		$to = $_POST['to'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		if(isset($to)){

			$_SESSION['to'] = $_POST['to'];
			$_SESSION['subj'] = $_POST['subject'];
			$_SESSION['msg'] = $_POST['message'];

			include ('../../../views/admin/inbox.php');
		}
	}

	//Leer mensaje
	if(isset($_POST['btn-read'])){
		
		$to = $_POST['to'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		if(isset($to)){

			include ('../../../views/admin/read.php');
		}
	}

}else{
	header('Location: http://localhost/correo/index.php');
	}
?>