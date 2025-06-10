<?php

namespace App\Controllers\MonstreController;

use \PDO;

function monstreAction(PDO $connexion)
{
    // charger la db
    include_once '../app/models/Monstre.php';
    $allMonsters = \App\Models\Monstre\findall($connexion);

    // charger home
    global $content, $title;
    $title = 'all monster';
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}
