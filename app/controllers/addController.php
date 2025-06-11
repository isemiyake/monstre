<?php

namespace App\Controllers\AddController;

use \PDO;

function addAction(PDO $connexion)
{
    // charger la db

    // charger home
    global $content, $title;
    $title = 'ajouter';
    ob_start();
    include '../app/views/ajouter/add.php';
    $content = ob_get_clean();
}
