<?php
	// Cargar el archivo de conexión
	require_once("gest/conexion.php");
	
	// Recogemos la variable enviada desde el formulario
	$codigo=$_POST['codigoclub'];
	
	// Sentencia para borrar el registro
	$sentencia="delete from club where CIF='$codigo'";
	
	// Ejecuta la sentencia
	mysqli_query($c,$sentencia);
	
	// Salta al archivo de Gestión de alumnos
	header("Location: G-clubes.php");

?>
