<?php
// Recupero il servizio dall'URL
$servizio = isset($_GET['servizio']) ? $_GET['servizio'] : '';

// Array con i dettagli dei servizi
$servizi = [
    'pratiche-edilizie' => [
        'titolo' => 'Progettazione e pratiche edilizie',
        'immagine' => 'immagini/pratiche-edilizie.jpg',
        'descrizione' => 'Offriamo un servizio completo per la gestione delle pratiche edilizie...',
    ],
    'pratiche-catastali' => [
        'titolo' => 'Pratiche Catastali e rilievi topografici',
        'immagine' => 'immagini/pratiche-catastali.jpg',
        'descrizione' => 'Ci occupiamo di aggiornamento e regolarizzazione della planimetria...',
    ],
    'certificazioni-energetiche' => [
        'titolo' => 'Certificazioni Energetiche',
        'immagine' => 'immagini/certificazioni-energetiche.jpg',
        'descrizione' => 'Offriamo certificazioni energetiche rapide ed efficienti...',
    ],
    'rendering' => [
        'titolo' => 'Rendering 3D',
        'immagine' => 'immagini/rendering.jpg',
        'descrizione' => 'Realizziamo rendering 3D per visualizzare il tuo progetto...',
    ],
    'termotecnico' => [
        'titolo' => 'Termotecnico ed efficientamento energetico',
        'immagine' => 'immagini/termotecnico.jpg',
        'descrizione' => 'Servizi di consulenza per il miglioramento energetico degli edifici...',
    ],
    'sicurezza' => [
        'titolo' => 'Sicurezza',
        'immagine' => 'immagini/sicurezza.jpg',
        'descrizione' => 'Gestione della sicurezza nei cantieri e prevenzione dei rischi...',
    ],
    'perizie' => [
        'titolo' => 'Perizie e stime immobiliari',
        'immagine' => 'immagini/peripezie.jpg',
        'descrizione' => 'Valutazione professionale di immobili e terreni...',
    ],
];

// Se il servizio non esiste, reindirizza
if (!isset($servizi[$servizio])) {
    header("Location: servizi.php");
    exit();
}

$dati_servizio = $servizi[$servizio];
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $dati_servizio['titolo']; ?> | Lorenzo Lunghi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <img src="<?php echo $dati_servizio['immagine']; ?>" class="img-fluid rounded mb-3">
        <h2><?php echo $dati_servizio['titolo']; ?></h2>
        <p><?php echo $dati_servizio['descrizione']; ?></p>
        <a href="servizi.php" class="btn btn-secondary">Torna ai servizi</a>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
