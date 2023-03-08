<nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="../../img/logo.png" class="logo" alt="Femsa">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav " id="list">
              <li class="nav-item">
                <a class="nav-link" id="p-operativo" href="../administrador/pOperativo.php">Personal operativo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="p-cursos" href="../administrador/capacitaciones.php">Capacitaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="p-filtro" href="../administrador/filtro.php">Búsqueda</a>
              </li>
              
              <li class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Usuario
                </a>
                <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="nav-link" id="p-info" href="../administrador/info_perfil.php">Mi Perfil</a></li>
                  <li><a class="dropdown-item sesionOut" href="../../../index.html" id="sesionOut">
                  <i class="fa-solid fa-right-from-bracket"></i>  Cerrar Sesión</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
</nav>