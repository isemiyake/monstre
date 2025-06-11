<?php

namespace App\Controllers\MonstreController;

use \PDO;

function monstreAction(PDO $connexion)
{
    // charger la db
    include_once '../app/models/monstre3.php';
    $monsters = \App\Models\Monstre3\find3($connexion);
    // charger home
    global $content, $title;
    $title = 'all monster';
    ob_start();
    include '../app/views/card/index.php';
    $content = ob_get_clean();
}
