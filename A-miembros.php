<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Formulario Alta de datos de Miembros</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-left mx-auto col-10">
				<form method="POST" action="A-miembros_Visor.php">
					<!-- Dato 1-->
					DNI:<br>
					<input type="text" name="d1" size="9" value="" placeholder="00000000X"><br>
					<!-- Dato 2-->
					Nombre:<br>
					<input type="text" name="d2" size="15" value=""><br>
					<!-- Dato 3-->
					Apellidos:<br>
					<input type="text" name="d3" size="45" value=""><br>

					Fecha de Nacimiento:<br>
					<input type="text" name="d4" size="20" value=""><br>

					Teléfono:<br>
					<input type="text" name="d5" size="9" value=""><br>

					Mail:<br>
					<input type="text" name="d6" size="30" value=""><br>

					Cuota: 1= PAGADA, 0= SIN PAGAR<br>
					<input type="text" name="d7" size="1" value=""><br>

					Alquiler: 1= Sí, 0= No<br>
					<input type="text" name="d8" size="1" value=""><br>

					Foto:<br>
					<input type="text" name="d9" size="250" value="" placeholder="URL"><br>

					Líder de club: 1= Sí, 0= No<br>
					<input type="text" name="d10" size="1" value=""><br>

					CIF del club: Z-00000000 si no pertenece a club<br>
					<input type="text" name="d11" size="10" value=""><br>
					
					<!-- Botones del Formulario -->					
					<hr>
					<input type="submit" value="ENVIAR">
					- 
					<input type="reset" value="LIMPIAR">
				</form>
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
	require_once('marcoinf.php');
?>	
