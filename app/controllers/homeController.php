<?php

namespace App\Controllers\HomeController;

use \PDO;

function homeAction(PDO $connexion)
{
    // charger la db
    include_once '../app/models/monstre.php';
    include_once '../app/models/monstreAll.php';
    $monsters = \App\Models\MonstreAll\findAll($connexion, 3);
    $monster = \App\Models\Monstre\findone($connexion);
    // charger home
    global $content, $title;
    $title = 'homepage';
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}
