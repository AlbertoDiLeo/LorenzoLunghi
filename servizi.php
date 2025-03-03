<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servizi | Lorenzo Lunghi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body id="servizi-page">

    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">I nostri servizi</h2>

        <div class="row">
            <!-- Servizio 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="immagini/pratiche-edilizie.jpg" class="card-img-top" alt="Progettazione e pratiche edilizie">
                    <div class="card-body text-center">
                        <h5 class="card-title">Progettazione e pratiche edilizie</h5>
                        <a href="dettagli-servizio.php?servizio=pratiche-edilizie" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>

            <!-- Servizio 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="immagini/pratiche-catastali.jpg" class="card-img-top" alt="Pratiche Catastali e rilievi topografici">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pratiche Catastali e rilievi topografici</h5>
                        <a href="dettagli-servizio.php?servizio=pratiche-catastali" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>

            <!-- Servizio 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="immagini/certificazioni-energetiche.jpg" class="card-img-top" alt="Certificazioni energetiche">
                    <div class="card-body text-center">
                        <h5 class="card-title">Certificazioni energetiche</h5>
                        <a href="dettagli-servizio.php?servizio=certificazioni-energetiche" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>

            <!-- Servizio 4 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="immagini/rendering.jpg" class="card-img-top" alt="Rendering">
                    <div class="card-body text-center">
                        <h5 class="card-title">Rendering</h5>
                        <a href="dettagli-servizio.php?servizio=rendering" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>

            <!-- Servizio 5 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="immagini/termotecnico.jpg" class="card-img-top" alt="Termotecnico ed efficientamento energetico">
                    <div class="card-body text-center">
                        <h5 class="card-title">Termotecnico ed efficientamento energetico</h5>
                        <a href="dettagli-servizio.php?servizio=termotecnico" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>

            <!-- Servizio 6 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="immagini/sicurezza.jpg" class="card-img-top" alt="Sicurezza">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sicurezza</h5>
                        <a href="dettagli-servizio.php?servizio=sicurezza" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>

            <!-- Servizio 7 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="immagini/peripezie.jpg" class="card-img-top" alt="Perizie e stime immobiliari">
                    <div class="card-body text-center">
                        <h5 class="card-title">Perizie e stime immobiliari</h5>
                        <a href="dettagli-servizio.php?servizio=perizie" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
