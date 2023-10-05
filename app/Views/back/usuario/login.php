<hr class="hr">
<div class="alargar">
  <section>
    <div class="container text-bg-primary p-3 rounded-3">
      <p class="text-center h3 fw-bold mb-3 mx-1 mx-md-4 mt-4">Ingresar</p>
      <!--Mensaje de error-->
      <?php if (session()->getFlashdata('msg')): ?>
        <div class="alert alert-danger text-center">
          <?= session()->getFlashdata('msg') ?>
        </div>
      <?php endif; ?>

      <form method="post" action="<?php echo base_url('/enviarlogin') ?>" class="mx-1 mx-md-4">
        <div class="d-flex flex-row align-items-center mb-3">
          <i class="fa-solid fa-envelope fa-2xl me-3 fa-fw"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="email" name="email" class="form-control" placeholder="correo@ejemplo.com">
            <label class="form-label" for="email">Correo</label>
          </div>
        </div>
        <div class="d-flex flex-row align-items-center mb-3">
          <i class="fa-solid fa-lock fa-2xl me-3 fa-fw"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="password" name="pass" class="form-control" placeholder="contraseña">
            <label class="form-label" for="pass">Contraseña</label>
          </div>
        </div>
        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="check2" />
          <label class="form-check-label" for="check2">Recordarme</label>
        </div>
        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
          <input type="submit" value="Ingresar" class="btn btn-dark">
        </div>
        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
          <span>¿Aún no se registró? <a href="<?php echo base_url('/registro'); ?>" class="text-warning">Registrarse
              aqui</a></span>
        </div>
      </form>
    </div>
  </section>
  <hr class="hr" />