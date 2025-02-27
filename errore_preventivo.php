<?php
session_start();
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "Si è verificato un errore.";
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Errore | Lorenzo Lunghi</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Il tuo CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container text-center mt-5">
    <h1>Errore</h1>
    <p><?php echo $error_message; ?></p>
    <a href="contatti.php" class="btn btn-primary">Torna al modulo di contatto</a>
  </div>
</body>
</html>