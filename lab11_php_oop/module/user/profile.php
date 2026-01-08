<?php
$db = new Database();
$info = "";

if ($_POST) {
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $u = $_SESSION['username'];
    $db->query("UPDATE users SET password='$pass' WHERE username='$u'");
    $info = "Password berhasil diperbarui";
}
?>

<div class="card p-4">
<h4>Profil User</h4>
<hr>

<p><b>Nama:</b> <?= $_SESSION['nama'] ?></p>
<p><b>Username:</b> <?= $_SESSION['username'] ?></p>

<hr>
<h5>Ganti Password</h5>

<?php if ($info): ?>
<div class="alert alert-success"><?= $info ?></div>
<?php endif; ?>

<form method="POST">
<input type="password" name="password" class="form-control mb-3" placeholder="Password Baru" required>
<button class="btn btn-warning">Update Password</button>
</form>
</div>
