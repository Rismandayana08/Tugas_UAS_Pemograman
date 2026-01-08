<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
html, body {
    height: 100%;
}

body {
    margin: 0;
    background: #f4f6f9;
}

/* SIDEBAR */
.sidebar {
    width: 260px;
    background: #ffffff;
}

/* KONTEN */
.content {
    background: #f0fdf4;
    padding: 24px;
    flex: 1;
}
</style>
</head>

<body>

<div class="d-flex" style="min-height:100vh">

    <!-- SIDEBAR -->
    <div class="sidebar shadow-sm p-3">
        <h5 class="fw-bold mb-4">MAIN MENU</h5>

        <ul class="nav flex-column gap-2">
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold" href="/lab11_php_oop/home/index">
                    📊 Dashboard
                </a>
            </li>

            <hr>

            <li class="nav-item fw-semibold text-muted small">KONTEN</li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/lab11_php_oop/artikel/index">
                    📝 Daftar Artikel
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/lab11_php_oop/artikel/tambah">
                    ➕ Tambah Artikel
                </a>
            </li>

            <hr>

            <li class="nav-item">
                <a class="nav-link text-dark" href="/lab11_php_oop/user/profile">
                    👤 Profil Saya
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-danger fw-semibold" href="/lab11_php_oop/user/logout">
                    🚪 Logout
                </a>
            </li>
        </ul>

        <!-- STATUS -->
        <div class="mt-4 p-3 rounded text-white"
             style="background:linear-gradient(135deg,#166534,#22c55e)">
            <small>Status</small>
            <div class="fw-bold">
                <?= $_SESSION['nama'] ?? 'Administrator' ?>
            </div>
        </div>
    </div>

    <!-- KONTEN KANAN -->
    <div class="content">
