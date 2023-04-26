<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Visor Alta de datos de CLUBES</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
		  <div class="text-center mx-auto col-10">
<?php			
		 // Todas las variables que ha enviado el Formulario
		$d1=$_POST['d1'];    	// Variable que recoge el...
		$d2=$_POST['d2'];    	// Variable que recoge el...	
		$d3=$_POST['d3']; 		// Variable que recoge el...
		$d4=$_POST['d4'];    	// Variable que recoge el...
		$d5=$_POST['d5'];    	// Variable que recoge el...	
		$d6=$_POST['d6']; 		// Variable que recoge el...

		// Muestra los datos recogidos durante la fase de desarrollo. 
		// Luego se ocultan o comentan estas líneas
		echo "<hr>Para comprobar muestra los datos recogidos: ";
		echo '<table class="table table-bordered table-hover table-condensed table-responsive">';
		echo "<tr><td>CIF: </td><td><b>$d1</b></td></tr>";
		echo "<tr><td>Nombre: </td><td><b>",$d2,"</b></td></tr>";
		echo "<tr><td>Fecha de Fundación: </td><td><b>",$d3,"</b></td></tr>";
		echo "<tr><td>Descripción: </td><td><b>",$d4,"</b></td></tr>";
        echo "<tr><td>Camuflaje: </td><td><b>",$d5,"</b></td></tr>";
        echo "<tr><td>Escudo: </td><td><b>",$d6,"</b></td></tr>";
		echo "</table>";
   
		// Indica la tabla sobre la que va a realizar la operación de alta
		$tabla="club"; // Entre comillas indicamos el nombre de la tabla
		
		// Construye la sentencia de inserción de los datos
		$sentencia="INSERT INTO $tabla (CIF, Nombre, FechaFund, Descripcion, Camuflaje, Escudo) VALUES ('$d1','$d2','$d3','$d4','$d5','$d6');";
		// Muestra la sentencia que va a ejecutar por si aparecen errores. Luego se puede ocultar esta línea.
		echo "<br>Sentencia:<br><font color='green'>". $sentencia."</font>";

		// A continuación ejecuta la sentencia
		 if (mysqli_query($c,$sentencia)) {			 
			 echo "<h2>Confirmada Alta como del registro: ".$d1." - ".$d2." - ".$d3." - ".$d4." - ".$d5." - ".$d6."</h2>";
		 }
		 else {
			 echo "<br><h2>No insertado. Compruebe errores en los datos de entrada.</h2>";
		 }	
?>
          </div>           
        </div> 
		<div class="row text-center">
		  <div class="col">
			<hr>	
		  </div>		
		</div>
      </div>
    </div>
<?php							 
// Cargamos el marco inferior de páginas
   require_once('marcoinf.php');		
?>
