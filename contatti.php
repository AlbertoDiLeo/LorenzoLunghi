<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contatti | Lorenzo Lunghi</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Il tuo CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- Favicon -->
  <link rel="icon" href="immagini/Logo foto.JPG" type="image/x-icon">
</head>
<body>
  <div class="main-content">
    <div class="container text-center mt-3">
      <h1>Geometra Lunghi Lorenzo</h1>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="chi-sono.php">Chi sono</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="servizi.php">Servizi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="contatti.php">Contatti</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="text-center">Contattaci</h2>

          <p class="text-center">Hai bisogno di informazioni o vuoi richiedere un preventivo? Compila il form sottostante e ti risponderemo al più presto.</p>  

          <form action="preventivo.php" method="POST">

            <div class="row mb-3">
              <div class="col-md-6">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome e cognome" required>
              </div>

              <div class="col-md-6">
                <input type="text" class="form-control" id="oggetto" name="oggetto" placeholder="Oggetto" required>
              </div>
            </div>


            <div class="row mb-3">
              <div class="col-md-6">
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
              </div>
              <div class="col-md-6">
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required>
              </div>
            </div>

            <div class="mb-3">
              <textarea class="form-control" id="messaggio" name="messaggio" rows="5" placeholder="Messaggio..." required></textarea>
            </div>
            <div class="text-center">

              <button type="submit" class="btn btn-primary btn-lg">Invia</button>

            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start mt-5">
      
      <div class="text-center p-3 bg-dark text-white footer-content">
        <a href="mailto:Info.geomlunghi@gmail.com" class="footer-link">info.geomlunghi@gmail.com</a>
        <a href="tel:+39 334 369 3310" class="footer-link">+39 334 369 3310</a>
        <a href="https://www.instagram.com/lorenzo.lunghi_/" target="_blank" class="footer-link">
          <i class="fab fa-instagram"></i>
        </a>
        <p>© 2024 Geometra Lunghi Lorenzo. Tutti i diritti riservati.</p>
      </div>
    </footer>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Il tuo script JS -->
  <script src="script.js"></script>
</body>
</html>