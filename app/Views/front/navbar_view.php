<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #45433e;">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--Logo de la empresa-->
      <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal_ultimo') ?>">
        <img src="<?php echo base_url('assets/img/dragon.png') ?>" width=50px alt="logo" class="img-fluid" />
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php if (session()->perfil_id == 1): ?>
      <div class="btn btn-danger active btnUser btn-sm ms-3">
        <a class="link-light fw-bold link-offset-2 link-underline link-underline-opacity-0" href="">ADMIN:
          <?php echo session('nombre'); ?>
        </a>
      </div>
      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
          <a class="nav-link" href="editar_usuarios">Editar usuarios</a>
          <a class="nav-link" href="registro">Registrarse</a>
          <a class="nav-link" href="login">Login</a>
          <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar
            sesión</a>
        </div>
      </div>

    <?php elseif (session()->perfil_id == 2): ?>
      <div class="btn btn-info active btnUser btn-sm ms-3">
        <a class="link-dark fw-bold link-offset-2 link-underline link-underline-opacity-0" href="">CLIENTE:
          <?php echo session('nombre'); ?>
        </a>
      </div>
      <!--Navbar para usuarios que pueden comprar-->
      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
          <a class="nav-link" href="quienes_somos">Quiénes somos</a>
          <a class="nav-link" href="acercade">Acerca de</a>
          <a class="nav-link" href="catalogo">Catálogo</a>
          <a class="nav-link" href="<?php echo base_url('/logout'); ?>" tabindex="-1" aria-disabled="true">Cerrar
            sesión</a>
        </div>
      </div>

    <?php else: ?>
      <!--Navbar para clientes no logueados-->
      <a class="navbar-brand" href="#"></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="navbar-nav me-auto mb-2 mb-lg-0 text-center">
          <a class="nav-link" href="quienes_somos">Quiénes somos</a>
          <a class="nav-link" href="acercade">Acerca de</a>
          <a class="nav-link" href="catalogo">Catálogo</a>
          <a class="nav-link" href="registro">Registrarse</a>
          <a class="nav-link" href="login">Login</a>
        </div>
      </div>
    <?php endif; ?>

    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-primary btn-outline-light text" type="submit">Buscar</button>
    </form>
  </div>
</nav>