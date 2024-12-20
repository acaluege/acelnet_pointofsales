<!--Inicio do menu copiado do bootstrap-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="min-width:350px;">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><?=esc(APP_NAME)?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <!--MENUS DO SISTEMA PRINCIPAL-->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?pg=pos">Ponto de Venda</a>
        </li>
            
        <li class="nav-item">
          <a class="nav-link" href="index.php?pg=admin">Admin</a>
        </li>
            
        <li class="nav-item">
          <a class="nav-link" href="index.php?pg=login">Login</a>
        </li>
            
        <li class="nav-item">
          <a class="nav-link" href="index.php?pg=signup">Cadastro</a>
        </li>
            
        <!--SUB-MENU DO MENU USUARIO-->    
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Olá, usuario
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <!--MENUS DO SUB-MENU USUARIO-->
            <li><a class="dropdown-item" href="index.php?pg=profile">Perfil</a></li>
            <li><a class="dropdown-item" href="index.php?pg=page-settings">Configuração do perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php?pg=logout">Sair</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>