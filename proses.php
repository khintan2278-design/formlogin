<?php
session_start();

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];

// Username & password admin
$adminUser = "admin";
$adminPass = "jawa";

// Cek login
if ($username == $adminUser && $password == $adminPass) {

    // Simpan session login
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;

    // Pindah ke dashboard
    header("Location: dashboard.html");
    exit;

} else {

    echo "
    <script>
        alert('Username atau Password salah!');
        window.location='index.html';
    </script>
    ";

}
?>