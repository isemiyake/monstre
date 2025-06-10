<?php

namespace App\Controllers\HomeController;

use \PDO;

function homeAction(PDO $connexion)
{
    // charger la db
    include_once '../app/models/Monstre.php';
    $monsters = \App\Models\Monstre\find3($connexion);
    $monster = \App\Models\Monstre\findone($connexion);
    // charger home
    global $content, $title;
    $title = 'homepage';
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}
