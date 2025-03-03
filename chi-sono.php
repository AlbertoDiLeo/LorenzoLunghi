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
<body>

    <?php include 'navbar.php'; ?>

    <div class="main-content">
      <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-8">
            
            <div class="card border-light shadow-lg p-4">
              <div class="text-center">
                <img src="immagini/chi-sono.jpg" class="img-fluid w-50" alt="Foto Lorenzo Lunghi">
              </div>

              <div class="card-body text-center">
                <!--<h2 class="card-title mb-3">Chi sono</h2>-->
                <p class="text-justify">Ciao, sono Lorenzo Lunghi, un geometra con una visione giovane e dinamica del mestiere. Mi sono abilitato nel 2024 e, proprio perché ho iniziato da poco, porto con me un approccio fresco, rapido ed efficiente, senza mai compromettere precisione e qualità. 
                <br>Metto tutta la mia passione e competenza per offrirti un servizio chiaro, puntuale e su misura per le tue esigenze. Dall’inizio alla fine, ti guiderò con attenzione e professionalità.
                <hr>
                <p><strong>C.F.:</strong> LNGLNZ02E29F205Q</p>
                <p><strong>P.IVA:</strong> 13310020964</p>
                <p><strong>Iscritto all’Ordine Geometri Laureati di Lodi</strong> (n. 791)</p>
                <p><strong>Iscritto all’albo dei Certificatori Energetici</strong> di Regione Lombardia (n. 34601)</p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <?php include 'mappa.php'; ?>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>
</html>