<?php

namespace App\Models\Monstre3;

use \PDO;

function findAll(PDO $connexion, $limit = null): array
{
    $sql = "SELECT m.*, m.name AS nomm, t.name AS nomt
            FROM monsters m
            JOIN monster_types t ON m.type_id = t.id
            ORDER BY created_at DESC";

    if ($limit !== null) {
        $sql .= " LIMIT :limit";
    }

    $rs = $connexion->prepare($sql);

    if ($limit !== null) {
        $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    }

    $rs->execute();

    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
