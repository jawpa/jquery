<?php 
	// nos fijamos que el nombre esté definido
	if (isset($_GET['nombre'])) {
		// recibimos el nombre que nos envía el formulario
		$usuario = $_GET['nombre'];
		// lo enviamos en mayúscula a la página web
		echo "<h1>" . strtoupper($usuario) . "</h1>";
	}



 ?>