<?php
// router principal

// route par page monstre
if (isset($_GET['monstre'])):
    include_once '../app/controllers/monstreController.php';
    \App\Controllers\MonstreController\monstreAction($connexion);
// route par defaut
else:
    include_once '../app/controllers/homeController.php';
    \App\Controllers\HomeController\homeAction($connexion);
endif;
