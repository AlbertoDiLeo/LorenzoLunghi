<?php
    $current_page = basename($_SERVER['SCRIPT_NAME']);
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container d-flex align-items-center">
        <!-- Logo a sinistra -->
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="immagini/Logo foto navbar.JPG" alt="Logo" class="img-fluid rounded-circle d-none d-md-inline" style="max-height: 60px;">
            <span class="fs-5 fw-bold ms-3 me-5">Lorenzo Lunghi</span>
        </a>

        <!-- Bottone menu mobile a destra -->
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu di navigazione centrato su schermi grandi -->
        <div class="collapse navbar-collapse ms-3" id="navbarNav">
            <ul class="navbar-nav ms-md-5 text-center fs-5 fw-semibold">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'chi-sono.php') ? 'active' : ''; ?>" href="chi-sono.php">Chi sono</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'servizi.php') ? 'active' : ''; ?>" href="servizi.php">Servizi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($current_page == 'contatti.php') ? 'active' : ''; ?>" href="contatti.php">Contattami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>