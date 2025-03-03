<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servizi | Lorenzo Lunghi</title>
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
                                    <strong>Progettazione e pratiche edilizie</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                          </div>
                          <div id="service1" class="collapse" data-bs-parent="#servicesAccordion">
                              <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/pratiche-edilizie.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Pratiche edilizie" width="150">
                                    <p>Offriamo un servizio completo e professionale per la gestione, la regolamentazione e l’adeguamento della tua proprietà, garantendo il pieno rispetto delle normative edilizie vigenti. Ci occupiamo della presentazione e del disbrigo di tutte le pratiche necessarie presso gli enti competenti, facilitando l’ottenimento delle autorizzazioni e la regolarizzazione di eventuali abusi edilizi.</p>  

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
                                
                                </div>
                          </div>
                      </div>

                        <!-- Servizio 2 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service2" aria-expanded="false">
                                    <strong>Pratiche Catastali e rilievi topografici</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service2" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/pratiche-catastali.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Pratiche Catastali e rilievi topografici" width="150">
                                    <p><strong>Pratiche Catastali</strong></p>  

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

                                </div>
                            </div>
                        </div>

                        <!-- Servizio 3 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service3" aria-expanded="false">
                                    <strong>Certificazioni energetiche</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service3" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/certificazioni-energetiche.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Certificazioni energetiche" width="150">
                                    <p>Vuoi sapere qual è attualmente la classe energetica della tua abitazione? Devi vendere o affittare casa? Offriamo un servizio rapido ed efficiente per la certificazione energetica del tuo immobile, fornendoti tutte le informazioni necessarie per adempiere agli obblighi normativi.</p>  

                                    <p>Il nostro servizio prevede:</p>  
                                    <ul>
                                      <li><strong>Rilievo dettagliato dell’abitazione</strong></li>
                                      <li><strong>Raccolta e analisi delle caratteristiche energetiche</strong></li>
                                      <li><strong>Elaborazione dei dati tramite software certificati</strong></li>
                                      <li><strong>Determinazione della classe energetica dell’immobile</strong></li>
                                      <li><strong>Consegna della certificazione entro una settimana</strong></li>
                                    </ul>  

                                    <p>Grazie alla nostra esperienza e a un approccio altamente efficiente, garantiamo un servizio veloce e preciso, ideale per chi ha necessità di vendere o affittare un immobile in tempi brevi.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Servizio 4 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service4" aria-expanded="false">
                                    <strong>Rendering</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service4" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/rendering.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Rendering" width="150">
                                    <p>Hai mai desiderato vedere in anteprima la casa dei tuoi sogni? Ti piacerebbe immaginare una nuova disposizione degli ambienti della tua abitazione?</p>  

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
                            </div>
                        </div>
                      </div>

                        <!-- Servizio 5 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service5" aria-expanded="false">
                                    <strong>Termotecnico ed efficientamento energetico</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service5" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/termotecnico.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Termotecnico e Efficientamento energetico" width="150">
                                    <p>Lollo muoviti</p>
                                </div>
                            </div>
                        </div>


                        <!-- Servizio 6 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service6" aria-expanded="false">
                                    <strong>Sicurezza</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service6" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/sicurezza.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Sicurezza" width="150">
                                    <p>lollo muoviti</p>
                                </div>
                            </div>
                        </div>

                        <!-- Servizio 7 -->
                        <div class="card mb-2">
                            <div class="card-header">
                                <button class="btn w-100 text-start d-flex justify-content-between align-items-center service-title"
                                    data-bs-toggle="collapse" data-bs-target="#service7" aria-expanded="false">
                                    <strong>Peripezie e stime immobiliari</strong>
                                    <i class="bi bi-chevron-down"></i>
                                </button>
                            </div>
                            <div id="service7" class="collapse" data-bs-parent="#servicesAccordion">
                                <div class="card-body d-flex flex-column flex-md-row">
                                    <img src="immagini/peripezie.jpg" class="img-fluid me-md-3 mb-3 mb-md-0" alt="Peripezie e stime immobiliari" width="150">
                                    <p>lollo muoviti</p>
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