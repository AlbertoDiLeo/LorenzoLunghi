<?php
// Recupero il servizio dall'URL
$servizio = isset($_GET['servizio']) ? $_GET['servizio'] : '';

// Array con i dettagli dei servizi
$servizi = [
    'pratiche-edilizie' => [
        'titolo' => 'Progettazione e pratiche edilizie',
        'immagine' => 'immagini/pratiche-edilizie.jpg',
        'descrizione' => 
        '<p>Offriamo un servizio completo e professionale per la gestione, la regolamentazione e l’adeguamento della tua proprietà, garantendo il pieno rispetto delle normative edilizie vigenti. Ci occupiamo della presentazione e del disbrigo di tutte le pratiche necessarie presso gli enti competenti, facilitando l’ottenimento delle autorizzazioni e la regolarizzazione di eventuali abusi edilizi.</p>  

        <p>Nello specifico, forniamo assistenza per:</p>  
            <ul>
                <li><strong>Permesso di Costruire (PDC)</strong></li>
                <li><strong>Segnalazione Certificata di Inizio Attività (SCIA)</strong></li>
                <li><strong>Comunicazione di Inizio Lavori Asseverata (CILA)</strong></li>
                <li><strong>Sanatorie edilizie</strong></li>
                <li><strong>Certificati di Agibilità</strong></li>
                <li><strong>Idoneità alloggiativa</strong></li>
                <li><strong>Rilievi e perizie tecniche</strong></li>
                <li><strong>Autorizzazioni paesaggistiche</strong></li>
            </ul>  

            <p>Grazie a un approccio innovativo e mirato, garantiamo un servizio efficiente, preciso e personalizzato, accompagnandoti in ogni fase del processo.</p>
        ',
    ],

    'pratiche-catastali' => [
        'titolo' => 'Pratiche Catastali e Rilievi Topografici',
        'immagine' => 'immagini/pratiche-catastali.jpg',
        'descrizione' => 
        '<p><strong>Pratiche Catastali</strong></p>  

        <p>Offriamo un servizio specializzato per l’aggiornamento e la regolarizzazione della planimetria della tua proprietà o del tuo terreno. Attraverso rilievi geometrici e topografici, garantiamo la corretta presentazione delle pratiche catastali necessarie presso gli enti competenti.</p>  

        <p>Nello specifico, ci occupiamo di:</p>  
            <ul>
                <li><strong>Redazione e aggiornamento planimetrie catastali</strong></li>
                <li><strong>Predisposizione e presentazione pratiche Docfa</strong></li>
                <li><strong>Elaborazione e gestione pratiche Pregeo</strong></li>
                <li><strong>Volture catastali</strong></li>
                <li><strong>Visure catastali</strong></li>
                <li><strong>Schede catastali</strong></li>
            </ul>  

            <p>Grazie alla nostra esperienza e all’utilizzo di strumenti all’avanguardia, assicuriamo un servizio preciso, affidabile e conforme alle normative vigenti.</p>  

            <p><strong>Rilievi Topografici</strong></p>  

            <p>Effettuiamo rilievi topografici e geometrici con strumentazione di precisione per garantire misurazioni dettagliate e affidabili. Questo servizio è essenziale per la progettazione, l’aggiornamento catastale e la verifica delle proprietà fondiarie.</p>  

            <p>Ci occupiamo di:</p>  
                <ul>
                    <li><strong>Rilievi plano-altimetrici</strong></li>
                    <li><strong>Rilievi per frazionamenti e accatastamenti</strong></li>
                    <li><strong>Tracciamenti di confini e verifiche di proprietà</strong></li>
                    <li><strong>Modellazione del terreno e restituzione grafica</strong></li>
                </ul>  

                <p>Grazie a un approccio innovativo e all’impiego di tecnologie avanzate, forniamo dati accurati e completi per ogni esigenza topografica e catastale.</p>
        ',
    ],

    'certificazioni-energetiche' => [
        'titolo' => 'Certificazioni Energetiche',
        'immagine' => 'immagini/certificazioni-energetiche.jpg',
        'descrizione' => 
        '<p>Vuoi sapere qual è attualmente la classe energetica della tua abitazione? Devi vendere o affittare casa? Offriamo un servizio rapido ed efficiente per la certificazione energetica del tuo immobile, fornendoti tutte le informazioni necessarie per adempiere agli obblighi normativi.</p>  

        <p>Il nostro servizio prevede:</p>  
            <ul>
                <li><strong>Rilievo dettagliato dell’abitazione</strong></li>
                <li><strong>Raccolta e analisi delle caratteristiche energetiche</strong></li>
                <li><strong>Elaborazione dei dati tramite software certificati</strong></li>
                <li><strong>Determinazione della classe energetica dell’immobile</strong></li>
                <li><strong>Consegna della certificazione entro una settimana</strong></li>
            </ul>  

        <p>Grazie alla nostra esperienza e a un approccio altamente efficiente, garantiamo un servizio veloce e preciso, ideale per chi ha necessità di vendere o affittare un immobile in tempi brevi.</p>

        ',
    ],

    'rendering' => [
        'titolo' => 'Rendering 3D',
        'immagine' => 'immagini/rendering.jpg',
        'descrizione' => 
        '<p>Hai mai desiderato vedere in anteprima la casa dei tuoi sogni? Ti piacerebbe immaginare una nuova disposizione degli ambienti della tua abitazione?</p>  

        <p>Offriamo un servizio di rendering professionale per aiutarti a visualizzare il tuo progetto prima ancora che diventi realtà. Attraverso un rilievo accurato dello stato attuale dell’immobile, ricaviamo tutte le misure necessarie per creare una rappresentazione dettagliata e realistica della tua futura casa.</p>  

        <p>Cosa offriamo:</p>  
        <ul>
            <li><strong>Rilievo dell’abitazione con misurazioni precise</strong></li>
            <li><strong>Studio tecnico per la fattibilità del progetto</strong></li>
            <li><strong>Elaborazione di rendering realistici</strong></li>
            <li><strong>Visualizzazione di nuove disposizioni degli ambienti</strong></li>
            <li><strong>Supporto nella trasformazione delle idee in soluzioni concrete</strong></li>
        </ul>  

        <p>Lascia spazio alla fantasia, noi ti aiuteremo a trasformarla in realtà con un approccio tecnico e professionale.</p>


        ',
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
            <img src="<?php echo $dati_servizio['immagine']; ?>" class="img-fluid rounded mb-3 service-image">
            <h2 class="service-title"><?php echo $dati_servizio['titolo']; ?></h2>
            <p><?php echo $dati_servizio['descrizione']; ?></p>
            <a href="servizi.php" class="btn btn-secondary">Torna ai servizi</a>
        </div>

    </div>
    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>
</html>
