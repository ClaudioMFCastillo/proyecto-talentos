<div class="alargar">
  <hr class="hr" />

  <section>
    <div class="container-fluid text-center">
      <div class="card text-bg-dark">
        <img src="<?php echo base_url('assets/img/principal.jpg') ?>" class="card-img" alt="...">
        <div class="card-img-overlay py-5">
          <h2 class="card-title fw-bold">Cras semper</h2>
          <h5 class="card-text">
            Vestibulum varius quam eget nibh luctus consectetur. Sed velit purus, sodales ac tincidunt vitae, semper eu
            purus. Nullam nibh felis, malesuada in metus sed, ultrices tempor nisi.
          </h5>
        </div>
      </div>
    </div>
  </section>

  <hr class="hr" />

  <section>
    <div class="container-fluid">
      <p class="clase1">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque molestias, consequatur sed earum
        beatae exercitationem, laborum iste est quidem corrupti enim, soluta nulla tempore omnis a rerum? Ea,
        fugit a.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nesciunt placeat iste
        reiciendis, quaerat labore fuga, consectetur, rem voluptate libero maiores. Fuga eaque adipisci
        mollitia. Animi qui est praesentium officia!
      </p>
      <div class="dropdown text-center">
        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Enlaces útiles
        </button>
        <ul class="dropdown-menu dropdown-menu-dark">
          <li><a class="dropdown-item" href="#">Noticias</a></li>
          <li><a class="dropdown-item" href="#">Proyectos</a></li>
        </ul>
      </div>
    </div>
  </section>

  <hr class="hr" />

  <!--carrusel-->
  <div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assets/img/neon_abyss.jpg') ?>" class="d-block w-100" alt="juego neon abyss">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/juegos2.jpg') ?>" class="d-block w-100"
            alt="computadora notebook gamer">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/mujer2.jpg') ?>" class="d-block w-100" alt="mujer gafas vr">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <hr class="hr" />