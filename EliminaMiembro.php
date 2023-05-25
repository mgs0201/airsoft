<?php
	// Cargar el archivo de conexión
	require_once("gest/conexion.php");
	
	// Recogemos la variable enviada desde el formulario
	$codigo=$_POST['codigomiembro'];
	
	// Sentencia para borrar el registro
	$sentencia="delete from miembro where DNI='$codigo'";
	
	// Ejecuta la sentencia
	mysqli_query($c,$sentencia);
	
	// Salta al archivo de Gestión de alumnos
	header("Location: G-Miembros.php");

?>
