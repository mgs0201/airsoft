<?php
	require_once('marcosup.php');
	
?>
    <div class="section">
      <div class="container">
        <div class="row text-center">
		   <div class="text-center mx-auto col-10">
			<h1 class="text-center text-primary">Formulario Alta de datos de CLUBES</h1>
		   </div>		
		</div>	
		<div class="row text-center">	
			<div class="text-left mx-auto col-10">
				<form method="POST" action="A-clubes_Visor.php">
					<!-- Dato 1-->
					CIF:<br>
					<input class='CIF' type="text" name="d1" size="10" value="" placeholder="X-00000000"><br>
					<!-- Dato 2-->
					Nombre:<br>
					<input class='texto' type="text" name="d2" size="50" value=""><br>
					<!-- Dato 3-->
					Fecha de Fundación:<br>
					<input id='fecha' type="text" name="d3" size="20" value="" placeholder="año-mes-día"><br>
                    <!-- Dato 4 -->
                    Descripción:<br>
					<input class='texto' type="text" name="d4" size="200" value=""><br>
					<!-- Dato 5-->
					Camuflaje:<br>
					<input class='texto' type="text" name="d5" size="20" value=""><br>
					<!-- Dato 6-->
					Escudo:<br>
					<input id='URL' type="text" name="d6" s-ize="250" value="" placeholder="URL a foto"><br>
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
	<script type="text/javascript" src="script/URL.js"></script>
	<script type="text/javascript" src="script/texto.js"></script>
	<script type="text/javascript" src="script/CIF.js"></script>
	<script type="text/javascript" src="script/fecha.js"></script>

<?php
	require_once('marcoinf.php');
?>	
