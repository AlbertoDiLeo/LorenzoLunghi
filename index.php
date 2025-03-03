<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Lorenzo Lunghi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS personalizzato -->
    <link rel="stylesheet" href="style.css">
    <!-- Favicon -->
    <link rel="icon" href="immagini/Logo foto.JPG" type="image/x-icon">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="main-content">

        <!-- HERO SECTION -->
        <section class="text-center">
            <img src="immagini/foto-iniziale.jpg" class="img-fluid w-50 mb-4" alt="Studio Tecnico Geometra">

            <div class="container">
                <h1 class="display-4 fw-bold text-dark">Precisione e Professionalità</h1>
                <p class="lead text-dark">Soluzioni rapide e su misura per ogni esigenza edilizia.</p>
            </div>
        </section>

        <!-- CHI SONO -->
        <section class="py-5 bg-secondary text-white text-center">
            <div class="container">
                <h2 class="fw-bold">Chi Sono</h2>
                <p class="lead">
                    Uno studio tecnico con esperienza e passione.<br>
                    Soddisfo ogni esigenza con soluzioni su misura.
                </p>
                <a href="chi-sono.php" class="btn btn-outline-light btn-lg custom-btn-chi-sono" >🧑‍💼 Scopri di più</a>
            </div>
        </section>

        <!-- DI COSA MI OCCUPO -->
        <section class="py-5 bg-light text-center">
            <div class="container">
                <h2 class="fw-bold">Di cosa mi occupo</h2>
                <p class="lead">
                    Servizi tecnici professionali per il settore edilizio.<br>
                    Pratiche catastali, progettazione e consulenze di qualità.
                </p>
                <a href="servizi.php" class="btn btn-outline-secondary btn-lg btn-lg custom-btn-servizi">🏗️ Scopri i servizi</a>
            </div>
        </section>



        <!-- PRONTO INTERVENTO H-24 -->
        <!--<section class="py-5 bg-dark text-white text-center">
            <div class="container">
                <h2 class="fw-bold">Pronto Intervento H-24</h2>
                <p class="lead">Hai un’urgenza? Contattami subito, sono sempre operativo per offrirti assistenza immediata.</p>
                <a href="tel:+393343693310" class="btn btn-outline-warning btn-lg custom-btn-intervento">📞 Chiama Subito</a>
            </div>
        </section>-->

        <?php include 'pronto_intervento.php'; ?>

        <!-- CAROSELLO RECENSIONI -->
        <section class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center fw-bold mb-4">Cosa dicono di me</h2>
                <div class="position-relative">
                    <div id="recensioniContainer" class="d-flex overflow-auto gap-3 py-3">
                        <!-- Template recensione (verrà clonato) -->
                        <div id="recensioneTemplate" class="card text-center p-4" style="width: 300px; display: none;">
                            <div class="card-body">
                                <p class="card-text fst-italic">"Testo recensione..."</p>
                                <h5 class="card-title fw-bold">- Nome</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'form_preventivo.php'; ?>

        <?php include 'mappa.php'; ?>


    </div>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>


