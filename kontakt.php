<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<main class="container mt-5 mb-5">
    <h1 class="fw-bold">Kontakt</h1>
    <hr class="mb-4" style="opacity: 0.1;">
    <p class="mb-4">Dosegljivi smo preko telefona in e-pošte ali preko obrazca.</p>

    <div class="card border-0 shadow-sm p-4">
        <div class="row g-5">
            <div class="col-md-5 d-flex flex-column justify-content-center">
                <div class="d-flex align-items-center mb-4">
                    <i class="bi bi-telephone text-primary fs-3 me-3"></i>
                    <span class="fs-5">+386 40 123 456</span>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <i class="bi bi-envelope text-primary fs-3 me-3"></i>
                    <span class="fs-5">info@popa.si</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-geo-alt text-primary fs-3 me-3"></i>
                    <span class="fs-5">Koroška cesta 39, Maribor</span>
                </div>
            </div>
            
            <div class="col-md-7 border-start ps-md-5">
                <form action="procesiraj_kontakt.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label small text-muted">Ime</label>
                        <input type="text" name="ime" class="form-control" placeholder="Ime" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small text-muted">Priimek</label>
                        <input type="text" name="priimek" class="form-control" placeholder="Priimek" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small text-muted">E-pošta</label>
                        <input type="email" name="email" class="form-control" placeholder="E-pošta" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small text-muted">Sporočilo:</label>
                        <textarea name="sporocilo" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 text-white fw-bold">Pošlji sporočilo</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php require_once 'footer.php'; ?>