<?php
$db = new Database();
$id = $segments[2] ?? null;


$data = $db->query("SELECT * FROM artikel WHERE id=$id")->fetch_assoc();
?>

<h2><?= htmlspecialchars($data['judul']) ?></h2>
<hr>
<p><?= nl2br(htmlspecialchars($data['isi'])) ?></p>

<a href="/LAB11_PHP_OOP/artikel/index" class="btn btn-secondary mt-3">Kembali</a>
