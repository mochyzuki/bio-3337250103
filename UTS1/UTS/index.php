<?php
// Mendefinisikan variabel PHP
$nama = "Mochi";
$umur = 20;
$hobi = "Coding dan Membaca";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Biodata <?php echo $nama; ?></title>
    <!-- Menghubungkan CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="kotak-biodata">
        <h1>Biodata Pribadi</h1>
        
        <!-- Menampilkan foto profil sederhana -->
        <img src="https://ui-avatars.com/api/?name=<?php echo $nama; ?>&size=100" alt="Foto Profil" class="foto-profil">

        <!-- Menampilkan data menggunakan PHP echo -->
        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>Umur:</strong> <?php echo $umur; ?> tahun</p>
        <p><strong>Hobi:</strong> <?php echo $hobi; ?></p>

        <!-- Menghubungkan tombol ke JavaScript -->
        <button onclick="tampilkanPesan()">Klik Saya!</button>
    </div>

    <!-- Menghubungkan JavaScript -->
    <script src="script.js"></script>

</body>
</html>
