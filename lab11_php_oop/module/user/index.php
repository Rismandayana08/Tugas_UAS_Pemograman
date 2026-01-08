<?php
/**
 * Modul Users: Index - Tampilkan list users.
 */
$db = new Database();
$users = $db->get('users');

echo "<h2>Daftar Users</h2>";
echo "<table class='table table-striped'>";
echo "<thead><tr><th>ID</th><th>Nama</th><th>Email</th></tr></thead>";
echo "<tbody>";
foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($user['id']) . "</td>";
    echo "<td>" . htmlspecialchars($user['nama']) . "</td>";
    echo "<td>" . htmlspecialchars($user['email']) . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";
?>