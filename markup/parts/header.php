<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid"> 
  <a class="navbar-brand" href="#">Alerta Lesa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item <?php if($currentPage == "inicio") echo "active"; ?>">
          <a class="nav-link" href="/index.php" target="_self">Inicio</a>
        </li>
        <li class="nav-item <?php if($currentPage == "juicios") echo "active" ; ?>">
          <a class="nav-link" href="/juicios.php" target="_self">Juicios</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

