<?php
  require 'function.php';
  if (isset($_POST["register"])) {

    if(registrasi($_POST) > 0) {
        echo "
        <script>
         alert('Registrasi Berhasil';
         window.localtion = 'login.php';
         </scrip> ";
    }
  }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="auth-box">
    <h3>Register</h3>

    <form method="post" action="">
        <label>Username</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username">

        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password">

        <label>Konfirmasi Password</label>
        <input type="password"  id="password2" name="password2" placeholder="Ulangi password">

        <button class="btn" type="submit" name="register">Daftar</button>
    </form>

    <div class="auth-link">
        Sudah punya akun? <a href="login.php">Login</a>
    </div>
</div>

</body>
</html>