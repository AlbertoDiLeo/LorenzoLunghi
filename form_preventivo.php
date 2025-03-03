<!-- RICHIEDI UN PREVENTIVO -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <h2 class="text-center fw-bold">Richiedi un Preventivo</h2>
        <p class="text-center lead">Compila il modulo e riceverai una consulenza gratuita!</p>
        <div class="row">
            <div class="col-md-8 mx-auto">

              <form action="preventivo.php" method="POST">

                    <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome e cognome" required>
                    </div>

                    <div class="col-md-6">
                        <input type="text" class="form-control" id="oggetto" name="oggetto" placeholder="Oggetto" required>
                    </div>
                    </div>


                    <div class="row g-3 mb-3">
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
                        <button type="submit" class="btn btn-warning btn-lg">Invia Richiesta</button>
                    </div>
              </form>
            </div>
        </div>
    </div>
</section>