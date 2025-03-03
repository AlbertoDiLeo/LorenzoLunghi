<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi sono | Lorenzo Lunghi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS personalizzato -->
    <link rel="stylesheet" href="style.css">
    <!-- Favicon -->
    <link rel="icon" href="immagini/Logo foto.JPG" type="image/x-icon">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body id="servizi-page">

    <?php include 'navbar.php'; ?>

    <div class="main-content">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2 class="text-center mb-4">I nostri servizi</h2>
                    
                    <div class="accordion" id="servicesAccordion">

                        <!-- Servizio 1 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service1" aria-expanded="false">
                                    <strong>📋 Pratiche Edilizie</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service1" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/pratiche-edilizie.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Pratiche edilizie" width="150">
                                    <p>Gestione completa di tutte le pratiche burocratiche per interventi edilizi, dalle autorizzazioni alle certificazioni.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Servizio 2 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service2" aria-expanded="false">
                                    <strong>📐 Progettazione</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service2" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/progettazione.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Progettazione" width="150">
                                    <p>Creazione di progetti su misura per nuove costruzioni, ristrutturazioni e riqualificazioni edilizie.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Servizio 3 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service3" aria-expanded="false">
                                    <strong>🎨 Rendering 3D</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service3" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/rendering.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Rendering" width="150">
                                    <p>Creazione di rendering 3D fotorealistici per visualizzare in anteprima il progetto prima della realizzazione.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Servizio 4 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service1" aria-expanded="false">
                                    <strong>📋 Pratiche Catastali</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service1" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/pratiche-edilizie.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Pratiche edilizie" width="150">
                                    <p>Gestione completa di tutte le pratiche burocratiche per interventi edilizi, dalle autorizzazioni alle certificazioni.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Servizio 5 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service1" aria-expanded="false">
                                    <strong>Perizie</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service1" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/pratiche-edilizie.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Pratiche edilizie" width="150">
                                    <p>Gestione completa di tutte le pratiche burocratiche per interventi edilizi, dalle autorizzazioni alle certificazioni.</p>
                                </div>
                            </div>
                        </div>


                        <!-- Servizio 6 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service1" aria-expanded="false">
                                    <strong>Successioni</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service1" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/pratiche-edilizie.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Pratiche edilizie" width="150">
                                    <p>Gestione completa di tutte le pratiche burocratiche per interventi edilizi, dalle autorizzazioni alle certificazioni.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Servizio 7 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service1" aria-expanded="false">
                                    <strong>Sicurezza</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service1" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/pratiche-edilizie.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Pratiche edilizie" width="150">
                                    <p>Gestione completa di tutte le pratiche burocratiche per interventi edilizi, dalle autorizzazioni alle certificazioni.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Servizio 8 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service1" aria-expanded="false">
                                    <strong>Certificazioni energetiche</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service1" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/pratiche-edilizie.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Pratiche edilizie" width="150">
                                    <p>Gestione completa di tutte le pratiche burocratiche per interventi edilizi, dalle autorizzazioni alle certificazioni.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Aggiungi altri servizi seguendo lo stesso schema -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>