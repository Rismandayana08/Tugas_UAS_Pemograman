<?php
session_start();

include "config.php";
include "class/Database.php";

// Ambil path
$path = $_SERVER['PATH_INFO'] ?? '/home/index';
$segments = explode('/', trim($path, '/'));

$mod  = $segments[0] ?? 'home';
$page = $segments[1] ?? 'index';

// Modul publik
$public = ['home', 'user'];

if (!in_array($mod, $public)) {
    if (!isset($_SESSION['login'])) {
        header("Location: /lab11_php_oop/user/login");
        exit;
    }
}

$file = "module/$mod/$page.php";

if ($mod == 'user' && $page == 'login') {
    include $file;
} else {
    include "template/header.php";
    if (file_exists($file)) {
        include $file;
    } else {
        echo "<h3>Halaman tidak ditemukan</h3>";
    }
    include "template/footer.php";
}
