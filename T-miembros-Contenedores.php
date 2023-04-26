<?php
    // Inserta el marco superior 
	require_once('marcosup.php');
?>      
      <div class="section">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center text-primary">Consulta de la Tabla Miembros</h1>
              <hr>
            </div>	
          </div>		
          <div class="row">
			<?php
				// Seleccionamos la tabla con la que vamos a trabajar
				$tabla="miembro";
				
				// Establecemos la sentencia SQL de la Consulta a realizar
				$sentencia="select * from $tabla";
				
				// Recopilar las filas almacenadas en la tabla
				$resultado=mysqli_query($c,$sentencia);
				//'<img src="'.$registro[i]'"height="100">';
				// Recorremos $resultado mostrando cada fila de la tabla
				while ($registro = mysqli_fetch_row($resultado)){
					// Construimos la entrada para cada fila de la tabla
					  echo '<div class="col-md-3 col-sm-3">';
            echo '<p>DNI:'.$registro[0].'</p>';
            echo '<p>Nombre:'.$registro[1].'</p>';
					  echo '<p>Apellidos:'.$registro[2].'</p>';
            echo '<p>Fecha de Nacimiento:'.$registro[3].'</p>';
            echo '<p>Teléfono:'.$registro[4].'</p>';
					  echo '<p>Mail:'.$registro[5].'</p>';
            echo '<p>:Cuota:'.$registro[6].'</p>';
            echo '<p>Alquiler:'.$registro[7].'</p>';
					  echo '<p>Foto: <img src="'.$registro[8].'" height="100"></p>';
            echo '<p>Líder de Club: '.$registro[9].'</p>';
            echo '<p>Miembro de: '.$registro[10].'</p>';
            echo '<hr>';
					echo '</div>';					
				}
			// Cerramos la conexión con la base de datos
            mysqli_close($c);			
			?>
          </div>
        </div>
      </div>
<?php
    // Inserta el marco inferior 
	require_once('marcoinf.php');
?>
