<?php
################################################
#### Menú Principal #
#
#
function principal()
{
echo '
        <ul class="navbar-nav ml-auto text-light">
          <li class="nav-item text-white"> <a class="nav-link" href="index.php">Inicio</a> </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Tablas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="T-clubes-Contenedores.php">Clubes</a>
              <a class="dropdown-item" href="T-miembros-Contenedores.php">Miembros</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Vistas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="T-jefes-Contenedores.php">Jefes de Club</a>
              <a class="dropdown-item" href="T-morosos-Contenedores.php">Morosos</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Altas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="A-clubes.php">Alta de clubes</a>
              <a class="dropdown-item" href="A-miembros.php">Alta de miembros</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Gestión</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="G-clubes.php">Gestión de clubes</a>
              <a class="dropdown-item" href="G-miembros.php">Gestión de miembros</a>
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="servicios.php">Servicios</a> </li>
          <li class="nav-item"> <a class="nav-link" href="contacto.php">Contacto</a> </li>
          <li class="nav-item"> <a class="nav-link" href="ayuda.php">Ayuda</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"></a> </li>          
          <li class="nav-item"> <a class="nav-link" href="#">ENTRAR</a> </li>
        </ul>
          ';
		 
}
################################################
?>
