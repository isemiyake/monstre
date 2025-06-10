<?php

namespace App\Models\Monstre;

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

function findone(PDO $connexion): array
{
    $sql = "SELECT m.*, m.name AS nomm, t.name AS nomt
            FROM monsters m
            JOIN monster_types t ON m.type_id = t.id
            ORDER BY rand()
            LIMIT 1;";
    return $connexion->query($sql)->fetch(PDO::FETCH_ASSOC);
}
function findAll(PDO $connexion): array
{
    $sql = "SELECT m.*, m.name AS nomm, t.name AS nomt
            FROM monsters m
            JOIN monster_types t ON m.type_id = t.id
            ORDER BY created_at DESC";
    return $connexion->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
