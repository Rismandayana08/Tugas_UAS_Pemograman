<?php
$db = new Database();
$result = $db->query("SELECT * FROM artikel ORDER BY id DESC");
?>

<h2>Daftar Artikel</h2>

<a href="/LAB11_PHP_OOP/artikel/tambah" class="btn btn-primary mb-3">
    + Tambah Artikel
</a>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($result && $result->num_rows > 0): ?>
            <?php $no = 1; ?>
            <?php while ($a = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($a['judul']) ?></td>
                    <td>
                        <a href="/LAB11_PHP_OOP/artikel/detail/<?= $a['id'] ?>" class="text-info">Detail</a> |
                        <a href="/LAB11_PHP_OOP/artikel/ubah/<?= $a['id'] ?>" class="text-warning">Ubah</a> |
                        <a href="/LAB11_PHP_OOP/artikel/hapus/<?= $a['id'] ?>" 
                           class="text-danger"
                           onclick="return confirm('Yakin ingin menghapus artikel ini?')">
                           Hapus
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" class="text-center">Belum ada data artikel</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
