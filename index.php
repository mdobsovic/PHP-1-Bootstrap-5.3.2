<?php
require __DIR__ . '/functions.php';

// nastavenie farebnej temy - light / dark
$colorTheme = 'light';
// ma sa automaticky zobrazit sidebar?
$showSidebarByDefault = true;
// zobrazit loading pri nacitavani stranky (true) alebo aktualny datum a cas (false)?
$showLoading = false;
// spracovanie zobrazenia loadingu na stranke
$dateTimeContent = $showLoading ?
    '<div class="d-flex align-items-center">
        <div class="me-2 spinner-border" role="status"></div>
        <div>Načítavam...</div>
    </div>'
    : getCurrentDateString(); // funkcia definovana vo functions.php

?>
<!DOCTYPE html>
<html lang="sk">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <title>Kurz PHP 1</title>
    <link rel="stylesheet" href="/css/bootstrap-icons.min.css" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/css/styles.css" rel="stylesheet" />
    <script src="/js/jquery-3.7.1.min.js"></script>
</head>

<body data-bs-theme="<?= $colorTheme; ?>">
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <div id="sidebar" class="<?= $showSidebarByDefault ? 'show ' : ''; ?>collapse collapse-horizontal border-end h-100 min-vh-100">
                    <div class="mx-2 d-flex flex-column justify-content-between align-items-center">
                        <div id="sidebar-nav" class="list-group border-0 rounded-0 text-sm-start">

                            <h5 class="p-2 mt-2 text-center">Menu</h5>

                            <a href="#" class="list-group-item text-truncate active" data-bs-parent="#sidebar">
                                <i class="bi bi-house"></i>
                                <span>Úvodná stránka</span>
                            </a>

                            <a href="#" class="list-group-item text-truncate" data-bs-parent="#sidebar">
                                <i class="bi bi-images"></i>
                                <span>Galéria</span>
                            </a>

                            <a href="#" class="list-group-item text-truncate" data-bs-parent="#sidebar">
                                <i class="bi bi-hourglass-split"></i>
                                <span>Kontakt</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <main class="col">
                <header class="navbar sticky-top flex-md-nowrap p-2 mb-2 border-bottom align-items-center shadow-sm bg-<?= $colorTheme; ?>">
                    <a href="#" data-bs-target="#sidebar" data-bs-toggle="collapse" class="p-1 text-decoration-none">
                        <i class="bi bi-list bi-lg py-2 p-1"></i>
                        Menu
                    </a>
                    <span>
                        Nadpis v menu
                    </span>
                    <div class="d-none d-lg-block" id="datetime">
                        <?= $dateTimeContent; ?>
                    </div>
                </header>
                Sem príde obsah webstránky

                <script src="/js/bootstrap.bundle.min.js"></script>
                <script src="/js/main.js"></script>
            </main>
        </div>
    </div>
</body>

</html>