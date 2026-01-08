<?php
$db = new Database();

// Statistik
$totalArtikel = $db->query("SELECT COUNT(*) total FROM artikel")
                   ->fetch_assoc()['total'];

$totalUser = $db->query("SELECT COUNT(*) total FROM users")
                ->fetch_assoc()['total'];

$latest = $db->query("SELECT * FROM artikel ORDER BY id DESC LIMIT 6");
?>

<!-- SAMBUTAN -->
<div class="card p-4 mb-4 shadow-sm"
     style="background:linear-gradient(135deg,#1f2937,#334155);color:white">
    <h4>Selamat Datang,  <?= $_SESSION['nama'] ?? 'Admin' ?>👋</h4>
    <p class="mb-0 text-light">
        Berikut adalah ringkasan aktivitas sistem hari ini.
    </p>
</div>

<!-- STATISTIK -->
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card p-4 shadow-sm">
            <h6 class="text-muted">TOTAL ARTIKEL</h6>
            <h2 class="fw-bold text-success"><?= $totalArtikel ?></h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 shadow-sm">
            <h6 class="text-muted">TOTAL USER</h6>
            <h2 class="fw-bold text-primary"><?= $totalUser ?></h2>
        </div>
    </div>
</div>

<!-- ARTIKEL TERBARU -->
<div class="card p-4 shadow-sm">
    <h5 class="mb-3">📝 Artikel Terbaru</h5>

    <?php if ($latest && $latest->num_rows > 0): ?>
        <div class="row">
            <?php while ($a = $latest->fetch_assoc()): ?>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="border rounded p-3 h-100 bg-white">
                        <h6 class="fw-bold">
                            <?= htmlspecialchars($a['judul']) ?>
                        </h6>
                        <p class="text-muted small">
                            <?= substr(strip_tags($a['isi']), 0, 80) ?>...
                        </p>
                        <a href="/lab11_php_oop/artikel/detail/<?= $a['id'] ?>"
                           class="text-success fw-semibold small">
                           Baca Artikel →
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p class="text-muted">Belum ada artikel.</p>
    <?php endif; ?>
</div>
