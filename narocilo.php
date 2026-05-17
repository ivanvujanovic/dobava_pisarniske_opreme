<!DOCTYPE html>
<html lang="sl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popa - Naročilo</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg py-3">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/popa.png" alt="Popa"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="domov.php">Domov</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php">O nas</a></li>
                    <li class="nav-item"><a class="nav-link" href="izdelki.php">Izdelki</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontakt.php">Kontakt</a></li>
                    <li class="nav-item"><a class="nav-link active" href="narocilo.php">Naročilo</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4 mb-5">
        <h1 class="fw-bold">Naročilo</h1>
        <hr class="mb-3" style="opacity: 0.1;">
        <p class="mb-4 text-muted">Prosimo, vnesite naslednje podatke:</p>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="custom-card shadow-sm">
                    
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
                                <label class="form-label small mb-1">Hišna številka</label>
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
                            
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </main>

    <footer class="footer-bar fixed-bottom d-flex justify-content-around align-items-center">
        <button type="submit" name="submit_narocilo" form="orderForm" class="btn btn-order">Pošlji naročilo</button>
        <button type="reset" form="orderForm" class="btn btn-order">Odstrani naročilo</button>
    </footer>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>