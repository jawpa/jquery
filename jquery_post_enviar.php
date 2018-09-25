<?php 
	// nos fijamos que el nombre esté definido
	if (isset($_POST['nombre']) && isset($_POST['apellido'])) {
		// almacenamos los datos que nos envía el formulario
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		// lo enviamos en mayúscula a la página web
		echo "<h1>Hola " . strtoupper($nombre) . " " . strtoupper($apellido) .  "</h1>";
	}



 ?>