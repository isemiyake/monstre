<?php

namespace App\Controllers\MonstreController;

use \PDO;

function monstreAction(PDO $connexion)
{
    // charger la db
    include_once '../app/models/monstreAll.php';
    $monsters = \App\Models\MonstreAll\findAll($connexion);
    // charger home
    global $content, $title;
    $title = 'all monster';
    ob_start();
    include '../app/views/card/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion, int $id)
{
    // charger la db
    include_once '../app/models/monstreAll.php';
    $monsters = \App\Models\MonstreAll\findOneById($connexion, $id);
    // charger home
    global $content, $title;
    $title = $monsters['nomm'];
    ob_start();
    include '../app/views/card/show.php';
    $content = ob_get_clean();
}
