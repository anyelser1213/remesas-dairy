

<?php
        
        if($_SERVER["DOCUMENT_ROOT"] != "/app"){
          include_once($_SERVER["DOCUMENT_ROOT"]."/sistema_remesas_dairy/configuraciones.php");
        }else{
          include_once($_SERVER["DOCUMENT_ROOT"]."/configuraciones.php");
        }
        
      
      ?>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Offcanvas navbar large">
          

        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $GLOBALS["ruta_fija"] ?>/index.php">CambiosRDI </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-white bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>

              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $GLOBALS["ruta_fija"] ?>/index.php">Inicio</a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarLgDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Servicios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarLgDropdown">
                      <li><a class="dropdown-item" href="<?php echo $GLOBALS["ruta_fija"] ?>/vistas/remesas.php">Remesas</a></li>
                      <li><a class="dropdown-item" href="<?php echo $_SESSION["ruta_fija"] ?>/vistas/comision.php">Herramientas/Comision</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="<?php echo $GLOBALS["ruta_fija"] ?>/vistas/personas_view.php">pruebas</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo $GLOBALS["ruta_fija"] ?>/index.php">Iniciar Sesión</a>
                  </li>
                </ul>
              
            </div>

          </div>
        </div>
</nav>