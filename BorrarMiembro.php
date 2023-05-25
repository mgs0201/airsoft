<?php
	require_once('marcosup.php');
	
?>
    <div class="py-3 bg-info" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));	background-position: top left;	background-size: 100%;	background-repeat: repeat; ">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center text-primary">Borrar Datos</h1>
              <hr>
            </div>	
          </div>		
          <div class="row">			
            <?php
				// Recogemos la variable que envía el formulario
				$cod =$_POST['codigo'];
				
				// Construimos la sentencia de consulta 
				$sentencia="select * from miembro where DNI='$cod'";
				
				// Para comprobar mostramos la sentencia que va a ejecutar
			//	echo "<hr>Sentencia: $sentencia<hr>";
				
				// Ejecutamos la sentencia SQL
				$resultado=mysqli_query($c,$sentencia);
				
				// Recogemos la fila en la variable registro.
				$registro = mysqli_fetch_row($resultado);
				
				// Mostramos el resultado
				echo '<table class="table table-hover">';
				echo "<tr><td>DNI:</td><td>$registro[0]</td></tr>";
				echo "<tr><td>NOMBRE:</td><td>$registro[1]</td></tr>";
				echo "<tr><td>APELLIDOS:</td><td>$registro[2]</td></tr>";
				echo "<tr><td>FECHA de NACIMIENTO:</td><td>$registro[3]</td></tr>";
				echo "<tr><td>TELÉFONO:</td><td>$registro[4]</td></tr>";
				echo "<tr><td>MAIL:</td><td>$registro[5]</td></tr>";
                echo "<tr><td>CUOTA (1 es pagado):</td><td>$registro[6]</td></tr>";
				echo "<tr><td>ALQUILER:</td><td>$registro[7]</td></tr>";
				echo '<tr><td>FOTO:</td><td><img src="'.$registro[8].'" height="100"></td></tr>';
				echo "<tr><td>LÍDER de CLUB:</td><td>$registro[9]</td></tr>";
				echo "<tr><td>CIF de CLUB:</td><td>$registro[10]</td></tr>";
				echo '</table>';
				
				// Pide confirmación para eliminarlo
				echo '<center></center><form name="eliminamiembro" method="POST" action="EliminaMiembro.php">';
				echo '<input type="hidden" name="codigomiembro" value="'.$registro[0].'">';
				echo '<input type="submit" value="ELIMINAR">';
				echo '</form></center>';
				
            ?>
          </div>           
        </div> 
          <div class="row text-center">
		   <div class="col">
			<hr>
			<a href="G-Miembros.php">Volver a Gestión de Miembros.</a>	
		   </div>		
		</div>
      </div>
    </div>

<?php
	require_once('marcoinf.php');
?>	
