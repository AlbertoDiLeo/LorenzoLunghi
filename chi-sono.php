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
      <div class="col-md-10">

        <!-- Sezione principale con immagine e descrizione -->
        <div class="bio-container d-flex flex-wrap align-items-center">
          
          <!-- Foto sulla sinistra -->
          <div class="bio-image">
            <img src="immagini/chi-sono.jpg" alt="Foto Lorenzo Lunghi">
          </div>

          <!-- Testo sulla destra -->
          <div class="bio-text">
            <p class="lead">Ciao, sono <strong>Lorenzo Lunghi</strong>, un geometra con una visione giovane e dinamica del mestiere. Mi sono abilitato nel 2024 e porto con me un approccio fresco, rapido ed efficiente, senza mai compromettere precisione e qualità.</p>

            <p>La mia energia e il desiderio di affermarmi nel settore mi spingono a offrire un servizio attento, professionale e accessibile, con soluzioni su misura per ogni esigenza.</p>

            <p>Se cerchi un professionista affidabile e motivato, pronto a offrirti il massimo, sono qui per te.</p>
          </div>

        </div>

        <!-- Sezione info con sfondo evidenziato -->
        <div class="info-container">
          <p><strong>C.F.:</strong> LNGLNZ02E29F205Q</p>
          <p><strong>P.IVA:</strong> 13310020964</p>
          <p><strong>Iscritto all’Ordine Geometri Laureati di Lodi:</strong> n. 791</p>
          <p><strong>Certificatore Energetico Regione Lombardia:</strong> n. 34601</p>
          <p><strong>Email:</strong> 
            <a href="mailto:info.geomlunghi@gmail.com" class="custom-link">info.geomlunghi@gmail.com</a>
          </p>
          <p><strong>Telefono:</strong> 
            <a href="tel:+393343693310" class="custom-link">+39 334 369 3310</a>
          </p>
          <p><strong>Indirizzo:</strong> Via Sandro Pertini, 6 - 26817, San Martino in Strada (LO), Italia</p>
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