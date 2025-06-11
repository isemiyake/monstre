<?php
// router principal
if (isset($_GET['add'])):
    include_once '../app/controllers/addController.php';
    \App\Controllers\AddController\addAction($connexion);
// route par page monstre
elseif (isset($_GET['monstre'])):
    include_once '../app/routers/monstre.php';
// route par defaut
else:
    include_once '../app/controllers/homeController.php';
    \App\Controllers\HomeController\homeAction($connexion);
endif;
