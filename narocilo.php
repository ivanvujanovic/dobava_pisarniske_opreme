<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<main class="container mt-5 mb-5">
    <h1 class="fw-bold">Naročilo</h1>
    <hr class="mb-3" style="opacity: 0.1;">
    <p class="mb-4 text-muted">Prosimo, vnesite naslednje podatke:</p>

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card border-0 shadow-sm p-4">
                
                <form id="orderForm" action="procesiraj_narocilo.php" method="POST">
                    <div class="row g-3">
                        
                        <div class="col-md-6">
                            <label class="form-label small mb-1">Ime *</label>
                            <input type="text" name="ime" class="form-control" placeholder="Ime" required>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label small mb-1">Priimek *</label>
                            <input type="text" name="priimek" class="form-control" placeholder="Priimek" required>
                        </div>
                        
                        <div class="col-12">
                            <label class="form-label small mb-1">E-pošta *</label>
                            <input type="email" name="email" class="form-control" placeholder="E-pošta" required>
                        </div>
                        
                        <div class="col-md-8">
                            <label class="form-label small mb-1">Ulica in hišna številka</label>
                            <input type="text" name="naslov" class="form-control" placeholder="Ulica in št.">
                        </div>
                        
                        <div class="col-md-4">
                            <label class="form-label small mb-1">Telefon</label>
                            <input type="tel" name="telefon" class="form-control" placeholder="Tel.">
                        </div>
                        
                        <div class="col-md-8">
                            <label class="form-label small mb-1">Izdelek *</label>
                            <input type="text" name="izdelek" class="form-control" placeholder="Naziv izdelka" required>
                        </div>
                        
                        <div class="col-md-4">
                            <label class="form-label small mb-1">Količina *</label>
                            <input type="number" name="kolicina" class="form-control" value="1" min="1" required>
                        </div>
                        
                        <div class="col-12">
                            <label class="form-label small mb-1">Opomba</label>
                            <textarea name="opomba" class="form-control" rows="2" placeholder="Posebne želje..."></textarea>
                        </div>
                        
                        <div class="col-12 d-flex gap-2 mt-4">
                            <button type="submit" name="submit_narocilo" class="btn btn-primary flex-grow-1 fw-bold">Pošlji naročilo</button>
                            <button type="reset" class="btn btn-outline-secondary">Ponovi vnos</button>
                        </div>
                        
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</main>

<?php require_once 'footer.php'; ?>