<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RESTO SAFIA</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
     <?php
   require 'function.php';
   $mahasiswa = query("SELECT * FROM menu");
     ?>
<div class="container">
    <h2>Daftar Menu</h2>

    <a href="tambah.php" class="btn btn-tambah">+ Tambah Menu</a>

    <table>
        <thead>
            <tr>
                <th>no</th>
                <th>nama makanan</th>
                <th>harga</th>
                <th>porsi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
              $no =1;
              foreach($mahasiswa as $mhs):
             
            ?>
            
</body>
</html>
