<?php
// login.php dipanggil via index.php (session sudah aktif)

// Jika sudah login
if (isset($_SESSION['login'])) {
    header("Location: ../home/index");
    exit;
}

$msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();

    $u = $_POST['username'] ?? '';
    $p = $_POST['password'] ?? '';

    // Query user
    $result = $db->query("SELECT * FROM users WHERE username='$u' LIMIT 1");

    // CEK DATA ADA ATAU TIDAK
    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($p, $user['password'])) {
            $_SESSION['login'] = true;
            $_SESSION['username'] = $user['username'];
            $_SESSION['nama'] = $user['nama'];

            header("Location: ../home/index");
            exit;
        }
    }

    // Jika gagal
    $msg = "Username atau password salah.";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Admin</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
html, body {
    height: 100%;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #166534, #22c55e);
}

.login-card {
    width: 420px;
    background: white;
    padding: 32px;
    border-radius: 16px;
    box-shadow: 0 20px 40px rgba(0,0,0,.2);
}
</style>
</head>

<body>

<div class="login-card">
    <h3 class="text-center mb-2">Admin Login</h3>
    <p class="text-center text-muted mb-4">Masuk untuk mengelola sistem</p>

    <?php if ($msg): ?>
        <div class="alert alert-danger text-center"><?= $msg ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control form-control-lg" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-lg" required>
        </div>

        <button class="btn btn-success btn-lg w-100">
            Login
        </button>
    </form>
</div>

</body>
</html>
