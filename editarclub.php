<?php
require_once('marcosup.php');
?>

<div class="py-2 bg-dark"
    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;  height: 600px;">
    <div class="row py-1 bg-dark text-info">
        <div class="col-1"></div>
        <div class="col-11">
            <br>
            <h1>Modificar Club</h1>
            <?php
            // Recoge todas las variables 
            $ID = $_POST['codigo'];

            // Busca los datos del usuario seleccionado
            $sentencia = "SELECT * FROM club WHERE CIF = '$ID'";

            // Recopilar las filas almacenadas en la tabla
            $resultado = mysqli_query($c, $sentencia);

            // Recorremos $resultado mostrando cada fila de la tabla
            while ($registro = mysqli_fetch_row($resultado)) {
                // Construimos la entrada para cada fila de la tabla
                echo '<div class="col-md-8 col-sm-8">';
                echo '<form name="ficha" action="M-clubes_Visor.php" method="POST">';
                echo "<table class='table table-sm text-info'> ";
                echo "<tr><td class='text-right text-warning'>CIF: </td><td><h5>", $registro[0], "</h5><input class='CIF' class='form-control' type='hidden' name='d1' value='$registro[0]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Nombre: </td><td><input class='texto' class='form-control' type='text' name='d2' size='20' value='$registro[1]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Fecha de Fundación: </td><td><input id='fecha' class='form-control' type='text' name='d3' size='20' value='$registro[2]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Descripción: </td><td><input class='texto' class='form-control' type='text' name='d4' size='40' value='$registro[3]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Camuflaje: </td><td><input class='texto' class='form-control' type='text' name='d5' size='40' value='$registro[4]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Escudo: </td><td><input id='URL' class='form-control' type='text' name='d6' size='40' value='$registro[5]'></td></tr>";
                echo "</table>";
                echo '</div>';
            }

            // Cerramos la conexión con la base de datos
            mysqli_close($c);
            ?>
        </div>
    </div>
    <div class="row py-1 bg-dark text-info">
        <div class="col-1 text-center"></div>
        <div class="col-3 text-center">
            <form name="confirmarForm" action="M-clubes_Visor.php" method="post">
                <input type="hidden" name="d1" value="<?php echo $ID; ?>">
                <p class="close">Confirmar cambios
                    <input type="image" src="estilos/confirmar.png" name="confirmar" height="30" alt="Cambiar">
                </p>
            </form>
        </div>
        <div class="col-3 text-center">
            <form action="G-clubes.php" method="post">
                <p class="close">Cancelar
                    <input type="image" src="estilos/cancelar.png" name="cancelar" height="30" alt="cancelar">
                </p>
            </form>
        </div>
        <div class="col-5 text-center"></div>
    </div>
</div>
<script type="text/javascript" src="script/texto.js"></script>
<script type="text/javascript" src="script/CIF.js"></script>
<script type="text/javascript" src="script/fecha.js"></script>
<script type="text/javascript" src="script/URL.js"></script>



<?php
// Cargar el marco inferior
require_once('marcoinf.php');
// Fin del código PHP
?>