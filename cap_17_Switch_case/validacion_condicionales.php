<style>
	h1 {
		text-align: center;
	}

	table {
		background-color: #FFC;
		padding: 5px;
		border: #666 5px solid;
	}

	.no_validado {
		font-size: 18px;
		color: #F00;
		font-weight: bold;
	}

	.validado {
		font-size: 18px;
		color: #0C3;
		font-weight: bold;
	}
</style>

<?php

echo "<h1>Se usa para evaluar varias condiciones</h1>";

if (isset($_POST["enviando"])) {
	$contra = $_POST["contra_usuario"];
	$nombre = $_POST["nombre_usuario"];
	$edad = $_POST["edad_usuario"];

	switch (true) {
		case $nombre == "Juan" &&  $edad >= "18" && $contra == "1234";
			echo "Usuario Autorizado. Hola Juan";
			break;
		case  $nombre == "Pedro" &&  $contra == "1234";
			echo "Usuario Autorizado. Hola Pedro";
			break;
		case  $nombre == "Maria" &&  $contra == "1234";
			echo "Usuario Autorizado. Hola Maria";
			break;
		default:
			echo "Usuario no Autorizado";
	}
}

?>