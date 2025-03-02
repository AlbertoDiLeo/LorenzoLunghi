<!-- RICHIEDI UN PREVENTIVO -->
<section class="py-5 bg-dark text-white">
    <div class="container">
        <h2 class="text-center fw-bold">Richiedi un Preventivo</h2>
        <p class="text-center lead">Compila il modulo e riceverai una consulenza gratuita!</p>
        <form action="preventivo.php" method="post" class="row g-3">

            <div class="col-md-6">
                <input type="text" name="nome" class="form-control" placeholder="Nome e Cognome" required>
            </div>

            <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>

            <div class="col-md-12">
                <textarea name="richiesta" class="form-control" rows="4" placeholder="Descrivi la tua richiesta" required></textarea>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-warning btn-lg">Invia Richiesta</button>
            </div>

        </form>
    </div>
</section>