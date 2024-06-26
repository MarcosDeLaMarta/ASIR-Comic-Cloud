
<x-layout>
  <header class="masthead bg-primary text-white text-center">
      <div class="container d-flex align-items-center flex-column">
          <h1 class="masthead-heading text-uppercase mb-0">Comics Cloud</h1>
          <!-- Estrella-->
          <div class="divider-custom divider-light">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
          </div>
          <!-- Descripcion-->
          <p class="masthead-subheading font-weight-light mb-0">Comics Cloud es una plataforma web abierta y colaborativa, totalmente
              gratuita, que pretende poner en contacto a múltiples lectores para intercambiar información
              acerca del mundo de los comics. Esta plataforma, incluye por un lado, elementos como
              reseñas y rankings, y por otro, la co-creación como elemento fundamental, puesto que
              cada lector pasa de consumir contenidos a producirlos.
          </p>
          <button type="button" class="btn btn-secondary empezar">Empezar</button>
      </div>
  </header>

  <div id="carouselExampleIndicators" class="carousel slide car-fondo" data-bs-ride="carousel">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{ asset('img/fondocomic3.jpeg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
              <img src="{{ asset('img/fondo-comic2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
              <img src="{{ asset('img/fondo-comics.jpg') }}" class="d-block w-100" alt="...">
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>
</x-layout>