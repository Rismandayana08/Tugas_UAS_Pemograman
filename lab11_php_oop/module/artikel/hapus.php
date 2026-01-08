<?php
$db = new Database();

// Ambil path: /artikel/hapus/3
$path = $_SERVER['PATH_INFO'] ?? '';
$segments = explode('/', trim($path, '/'));

// segments = ['artikel', 'hapus', '3']
$id = $segments[2] ?? null;

if (!$id) {
    echo "ID artikel tidak ditemukan";
    exit;
}

$db->query("DELETE FROM artikel WHERE id=$id");

header("Location: /LAB11_PHP_OOP/artikel/index");
exit;
