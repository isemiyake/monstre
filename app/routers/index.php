<?php
// router principal

// route par defaut
if (isset($_GET('monstre'))):
    include_once '../app/controllers/homeController.php';
    \App\Controllers\HomeController\homeAction($connexion);

else:
    include_once '../app/controllers/homeController.php';
    \App\Controllers\HomeController\homeAction($connexion);
endif;
