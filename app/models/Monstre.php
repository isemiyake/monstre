<?php

namespace App\Models\Monstre;

use \PDO;

function findone(PDO $connexion): array
{
    $sql = "SELECT m.*, m.name AS nomm, t.name AS nomt
            FROM monsters m
            JOIN monster_types t ON m.type_id = t.id
            ORDER BY rand()
            LIMIT 1;";
    return $connexion->query($sql)->fetch(PDO::FETCH_ASSOC);
}
