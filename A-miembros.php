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
					<input class='DNI' type="text" name="d1" size="9" value="" placeholder="00000000X"><br>
					<!-- Dato 2-->
					Nombre:<br>
					<input class='texto' type="text" name="d2" size="15" value=""><br>
					<!-- Dato 3-->
					Apellidos:<br>
					<input class='texto' type="text" name="d3" size="45" value=""><br>

					Fecha de Nacimiento:<br>
					<input id='fecha' type="text" name="d4" size="20" value=""><br>

					Teléfono:<br>
					<input id='tel' type="text" name="d5" size="9" value=""><br>

					Mail:<br>
					<input id='mail' type="text" name="d6" size="30" value=""><br>

					Cuota: 1= PAGADA, 0= SIN PAGAR<br>
					<input class='bi' type="text" name="d7" size="1" value=""><br>

					Alquiler: 1= Sí, 0= No<br>
					<input class='bi' type="text" name="d8" size="1" value=""><br>

					Foto:<br>
					<input id='URL' type="text" name="d9" size="45" value="" placeholder="URL"><br>

					Líder de club: 1= Sí, 0= No<br>
					<input class='bi' type="text" name="d10" size="1" value=""><br>

					CIF del club: Z-00000000 si no pertenece a club<br>
					<input class='CIF' type="text" name="d11" size="10" value="Z-00000000"><br>
					
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

	<script type="text/javascript" src="script/texto.js"></script>
	<script type="text/javascript" src="script/bi.js"></script>
	<script type="text/javascript" src="script/CIF.js"></script>
	<script type="text/javascript" src="script/fecha.js"></script>
	<script type="text/javascript" src="script/URL.js"></script>
	<script type="text/javascript" src="script/mail.js"></script>
	<script type="text/javascript" src="script/tel.js"></script>
	<script type="text/javascript" src="script/DNI.js"></script>
<?php
	require_once('marcoinf.php');
?>	
