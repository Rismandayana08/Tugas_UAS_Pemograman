<?php
$db = new Database();
$id = $segments[2] ?? null;


$data = $db->query("SELECT * FROM artikel WHERE id=$id")->fetch_assoc();

if ($_POST) {
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];

    $db->query("UPDATE artikel SET judul='$judul', isi='$isi' WHERE id=$id");
    header("Location: /LAB11_PHP_OOP/artikel/index");
    exit;
}
?>

<h2>Ubah Artikel</h2>

<form method="POST">
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control"
               value="<?= htmlspecialchars($data['judul']) ?>" required>
    </div>
    <div class="mb-3">
        <label>Isi Artikel</label>
        <textarea name="isi" class="form-control" rows="6" required><?= htmlspecialchars($data['isi']) ?></textarea>
    </div>
    <button class="btn btn-warning">Update</button>
    <a href="/LAB11_PHP_OOP/artikel/index" class="btn btn-secondary">Kembali</a>
</form>
