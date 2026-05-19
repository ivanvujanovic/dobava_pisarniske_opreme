<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<main class="izdelki-wrapper container mt-5">

  <section class="title-section mb-4">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="fw-bold">Izdelki</h1>
      </div>
      <div class="col-md-6">
        <form class="search-box ms-md-auto d-flex">
          <input type="text" class="form-control me-2" placeholder="Iskanje...">
          <button type="submit" class="btn btn-outline-primary" aria-label="Išči" title="Išči">⌕</button>
        </form>
      </div>
    </div>
  </section>

  <section class="product-section mb-5">
    <h2>Pohištvo</h2>
    <div class="row align-items-center izdelki-row g-3">
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="stolica.png" class="img-fluid" alt="Stolica"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="miza.png" class="img-fluid" alt="Miza"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="bijela_polica.png" class="img-fluid" alt="Polica"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="bijela_polica.png" class="img-fluid" alt="Omarica"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="bijela_polica2.png" class="img-fluid" alt="Miza z omaro"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="bijela_polica3.png" class="img-fluid" alt="Visoka polica"></div>
      </div>
      <div class="col-12 text-end mt-3">
        <a href="narocilo.php" class="btn btn-primary">Naroči</a>
      </div>
    </div>
  </section>

  <section class="product-section mb-5">
    <h2>Naprave</h2>
    <div class="row align-items-center izdelki-row g-3">
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="printer.jpg" class="img-fluid" alt="Tiskalnik"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="monitor.png" class="img-fluid" alt="Monitor"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="boja.jpg" class="img-fluid" alt="Toner"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="laptop.png" class="img-fluid" alt="Prenosnik"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="tipkovnica.png" class="img-fluid" alt="Tipkovnica"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="miska.png" class="img-fluid" alt="Miška"></div>
      </div>
      <div class="col-12 text-end mt-3">
        <a href="narocilo.php" class="btn btn-primary">Naroči</a>
      </div>
    </div>
  </section>

  <section class="product-section mb-5">
    <h2>Material</h2>
    <div class="row align-items-center izdelki-row g-3">
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="stickynotes.png" class="img-fluid" alt="Lističi"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="registrator.png" class="img-fluid" alt="Registrator"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="papir.png" class="img-fluid" alt="Papir"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="zvezek.png" class="img-fluid" alt="Zvezek"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="kulice.png" class="img-fluid" alt="Kemični svinčniki"></div>
      </div>
      <div class="col-6 col-md-2">
        <div class="product-card text-center"><img src="bojice.png" class="img-fluid" alt="Barvice"></div>
      </div>
      <div class="col-12 text-end mt-3">
        <a href="narocilo.php" class="btn btn-primary">Naroči</a>
      </div>
    </div>
  </section>

</main>

<?php require_once 'footer.php'; ?>