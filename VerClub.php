<?php
	require_once('marcosup.php');
	
?>
    <div class="py-3 bg-info" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));	background-position: top left;	background-size: 100%;	background-repeat: repeat; ">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center text-primary">Visor de Datos.</h1>
              <hr>
            </div>	
          </div>		
          <div class="row">			
            <?php
				// Recogemos la variable que envía el formulario
				$cod =$_POST['codigo'];
				
				// Construimos la sentencia de consulta 
				$sentencia="select * from club where CIF='$cod'";
				
				// Para comprobar mostramos la sentencia que va a ejecutar
			//	echo "<hr>Sentencia: $sentencia<hr>";
				
				// Ejecutamos la sentencia SQL
				$resultado=mysqli_query($c,$sentencia);
				
				// Recogemos la fila en la variable registro.
				$registro = mysqli_fetch_row($resultado);
				
				// Mostramos el resultado
				echo '<table class="table table-hover">';
				echo "<tr><td>CIF:</td><td>$registro[0]</td></tr>";
				echo "<tr><td>NOMBRE:</td><td>$registro[1]</td></tr>";
				echo "<tr><td>FECHA de FUNDACIÓN:</td><td>$registro[2]</td></tr>";
				echo "<tr><td>DESCRIPCIÓN:</td><td>$registro[3]</td></tr>";
				echo "<tr><td>CAMUFLAJE:</td><td>$registro[4]</td></tr>";
				echo '<tr><td>ESCUDO:</td><td><img src="'.$registro[5].'" height="100"></td></tr>';
				echo '</table>';
				
            ?>
          </div>           
        </div> 
          <div class="row text-center">
		   <div class="col">
			<hr>
			<a href="G-clubes.php">Volver a Gestión de Clubes.</a>	
		   </div>		
		</div>
      </div>
    </div>

<?php
	require_once('marcoinf.php');
?>	
