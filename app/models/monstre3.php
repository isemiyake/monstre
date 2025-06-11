<?php

namespace App\Models\Monstre3;

use \PDO;

function find3(PDO $connexion): array
{
    $sql = "SELECT m.*, m.name AS nomm, t.name AS nomt
            FROM monsters m
            JOIN monster_types t ON m.type_id = t.id
            ORDER BY created_at DESC
            LIMIT 3;";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
