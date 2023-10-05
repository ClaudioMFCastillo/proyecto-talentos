<div class="alargar">
  <hr class="hr" />
  <section>
    <div class="container text-bg-primary p-3 rounded-3">
      <p class="text-center h3 fw-bold mb-3 mx-1 mx-md-4 mt-4">Registrarse</p>

      <?php $validation = \Config\Services::validation(); ?>
      <form method="post" action="<?php echo base_url('/enviar-form') ?>" class="mx-1 mx-md-4">
        <?= csrf_field(); ?>
        <?= csrf_field(); ?>
        <?php if (!empty(session()->getFlashdata('fail'))): ?>
          <div class="alert alert-danger text-center">
            <?= session()->getFlashdata('fail'); ?>
          </div>
        <?php endif ?>
        <?php if (!empty(session()->getFlashdata('success'))): ?>
          <div class="alert alert-success text-center">
            <?= session()->getFlashdata('success'); ?>
          </div>
        <?php endif ?>

        <div class="d-flex flex-row align-items-center mb-3">
          <i class="fa-solid fa-signature fa-2xl me-3 fa-fw"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="text" name="nombre" class="form-control" placeholder="nombre">
            <label class="form-label" for="nombre">Nombre</label>
          </div>
          <!--Error-->
          <?php if ($validation->getError('nombre')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('nombre'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="d-flex flex-row align-items-center mb-3">
          <i class="fa-solid fa-signature fa-2xl me-3 fa-fw"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="text" name="apellido" class="form-control" placeholder="apellido">
            <label class="form-label" for="apellido">Apellido</label>
          </div>
          <!--Error-->
          <?php if ($validation->getError('apellido')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('apellido'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="d-flex flex-row align-items-center mb-3">
          <i class="fa-solid fa-envelope fa-2xl me-3 fa-fw"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="email" name="email" class="form-control" placeholder="correo@ejemplo.com">
            <label class="form-label" for="email">Email</label>
          </div>
          <!--Error-->
          <?php if ($validation->getError('email')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('email'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="d-flex flex-row align-items-center mb-3">
          <i class="fa-solid fa-user fa-2xl me-3 fa-fw"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="text" name="usuario" class="form-control" placeholder="usuario123">
            <label class="form-label" for="usuario">Usuario</label>
          </div>
          <!--Error-->
          <?php if ($validation->getError('usuario')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('usuario'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="d-flex flex-row align-items-center mb-3">
          <i class="fa-solid fa-lock fa-2xl me-3 fa-fw"></i>
          <div class="form-outline flex-fill mb-0">
            <input type="password" name="pass" class="form-control" placeholder="contraseña">
            <label class="form-label" for="pass">Contraseña</label>
          </div>
          <!--Error-->
          <?php if ($validation->getError('pass')) { ?>
            <div class='alert alert-danger mt-2'>
              <?= $error = $validation->getError('pass'); ?>
            </div>
          <?php } ?>
        </div>

        <div class="form-check d-flex justify-content-center mb-4">
          <input class="form-check-input me-2" type="checkbox" value="" id="check">
          <label class="form-check-label" for="check">
            Acepto los <a class="link-warning link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
              href="#!">Términos de servicio</a>
          </label>
        </div>
        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
          <input type="submit" value="Registrarme" class="btn btn-dark">
        </div>
      </form>
    </div>
  </section>
  <hr class="hr">