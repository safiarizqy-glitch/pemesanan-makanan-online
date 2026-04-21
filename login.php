<?php
session_star();
  require 'function.php';
  if (isset($_POST["login"])) {

  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM user2 WHERE username = '$username' ");

  if (mysqli_num_rows($result)=== 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {

    

    header("location:index.php");
    exit;
    }
  }
  $error =true;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login sistem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Login Resto Safia</h2>

  <div class="auth-box">
    <h3>Login</h3>

    <?php 
    if (isset($error)) : ?>
    <p style="color:red;">Username / Password salah!</p>
    <?php endif; ?>

    <form method="post" action="">
        <label>Username</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username">

        <label>Password</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password">

        <button class="btn" type="submit" name="login">Login</button>
    </form>

    <div class="auth-link">
        Belum punya akun? <a href="register.php">Daftar</a>
    </div>
</div>

</body>
</html>