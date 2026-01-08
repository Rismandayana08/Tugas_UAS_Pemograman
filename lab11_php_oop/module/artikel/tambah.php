<?php
$db = new Database();
$msg = "";

if ($_POST) {
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];

    $db->query("INSERT INTO artikel (judul, isi) VALUES ('$judul', '$isi')");
    header("Location: /LAB11_PHP_OOP/artikel/index");
    exit;
}
?>

<h2>Tambah Artikel</h2>

<form method="POST">
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Isi Artikel</label>
        <textarea name="isi" class="form-control" rows="6" required></textarea>
    </div>
    <button class="btn btn-primary">Simpan</button>
    <a href="/LAB11_PHP_OOP/artikel/index" class="btn btn-secondary">Kembali</a>
</form>
