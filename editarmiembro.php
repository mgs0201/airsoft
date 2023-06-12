<?php
require_once('marcosup.php');
?>

<div class="py-2 bg-dark"
    style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;  height: 600px;">
    <div class="row py-1 bg-dark text-info">
        <div class="col-1"></div>
        <div class="col-11">
            <br>
            <h1>Modificar miembro</h1>
            <?php
            // Recoge todas las variables 
            $ID = $_POST['codigo'];

            // Busca los datos del usuario seleccionado
            $sentencia = "SELECT * FROM miembro WHERE DNI = '$ID'";

            // Recopilar las filas almacenadas en la tabla
            $resultado = mysqli_query($c, $sentencia);

            // Recorremos $resultado mostrando cada fila de la tabla
            while ($registro = mysqli_fetch_row($resultado)) {
                // Construimos la entrada para cada fila de la tabla
                echo '<div class="col-md-8 col-sm-8">';
                echo '<form name="ficha" action="modificaUsuario2.php" method="POST">';
                echo "<table class='table table-sm text-info'> ";
                echo "<tr><td class='text-right text-warning'>DNI: </td><td><h5>", $registro[0], "</h5><input class='DNI' class='form-control' type='hidden' name='DNI' size='9' value='$registro[0]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Nombre: </td><td><input class='texto' class='form-control' type='text' name='Nombre' size='20' value='$registro[1]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Apellidos: </td><td><input class='texto' class='form-control' type='text' name='Apellidos' size='20' value='$registro[2]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Fecha de Nacimiento: </td><td><input id='fecha' class='form-control' type='text' name='FechaNac' size='40' value='$registro[3]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Teléfono: </td><td><input id='tel' class='form-control' type='text' name='Telefono' size='40' value='$registro[4]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Mail: </td><td><input id='mail' class='form-control' type='text' name='Mail' size='40' value='$registro[5]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Cuota: </td><td><input class='bi' class='form-control' type='text' name='Cuota' size='40' value='$registro[6]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Alquiler: </td><td><input class='bi' class='form-control' type='text' name='Alquiler' size='40' value='$registro[7]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Foto: </td><td><input id='URL' class='form-control' type='text' name='Foto' size='40' value='$registro[8]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Lider: </td><td><input class='bi' class='form-control' type='text' name='Lider' size='40' value='$registro[9]'></td></tr>";
                echo "<tr><td class='text-right text-warning'>Miembro de: </td><td><input class='CIF' class='form-control' type='text' name='CLUB_CIF' size='40' value='$registro[10]'></td></tr>";

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
            <form name="confirmarForm" action="editarmiembro.php" method="post">
                <input type="hidden" name="DNI" value="<?php echo $ID; ?>">
                <p class="close">Confirmar cambios
                    <input type="image" src="estilos/confirmar.jpg" name="confirmar" height="30" alt="Cambiar">
                </p>
            </form>
        </div>
        <div class="col-3 text-center">
            <form action="G-miembros.php" method="post">
                <p class="close">Cancelar
                    <input type="image" src="estilos/cancelar.png" name="cancelar" height="30" alt="cancelar">
                </p>
            </form>
        </div>
        <div class="col-5 text-center"></div>
    </div>
</div>

<script type="text/javascript" src="script/texto.js"></script>
<script type="text/javascript" src="script/bi.js"></script>
<script type="text/javascript" src="script/CIF.js"></script>
<script type="text/javascript" src="script/fecha.js"></script>
<script type="text/javascript" src="script/URL.js"></script>
<script type="text/javascript" src="script/mail.js"></script>
<script type="text/javascript" src="script/tel.js"></script>

<?php
// Cargar el marco inferior
require_once('marcoinf.php');
// Fin del código PHP
?>