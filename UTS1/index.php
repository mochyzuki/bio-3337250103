<?php
// Data Biodata menggunakan PHP
$nama = "Muhammad Rizal Chaerul Syahputra";
$nim = "3337250103";
$tagline = "Mahasiswa Informatika, Universitas Sultan Ageng Tirtayasa";
$hobi = "Memasak, baca komik, serta mendengarkan musik";
$target = "Menjadi spesialis di satu bidang";

// Array untuk daftar skill
$skills = ["Python", "JavaScript", "HTML", "CSS", "PHP"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - <?php echo $nama; ?></title>
    <!-- Menghubungkan CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="header-content">
            <!-- Menampilkan variabel PHP -->
            <h1><?php echo $nama; ?></h1>
            <p class="tagline"><?php echo $tagline; ?></p>
            <button id="btnToggle">🌙 Dark Mode</button>
        </div>
    </header>

    <main>
        <section id="tentang">
            <h2>Tentang Saya</h2>
            <p>Saya adalah mahasiswa informatika dengan NIM <?php echo $nim; ?>.</p>
            <p>Hobi saya adalah <?php echo $hobi; ?>.</p>
            <p>Target setelah lulus: <?php echo $target; ?>.</p>
        </section>

        <section id="skill">
            <h2>Bahasa Pemrograman Favorit</h2>
            <div class="skill-list">
                <!-- Looping array PHP untuk menampilkan skill -->
                <?php foreach($skills as $skill) { ?>
                    <span class="skill-item"><?php echo $skill; ?></span>
                <?php } ?>
            </div>
        </section>

        <section id="riwayat">
            <h2>Riwayat Pendidikan</h2>
            <table>
                <tr>
                    <th>Tahun</th>
                    <th>Jenjang</th>
                </tr>
                <tr>
                    <td>2025 - sekarang</td>
                    <td>S1 Informatika, Universitas Sultan Ageng Tirtayasa</td>
                </tr>
            </table>
        </section>
    </main>

    <footer>
        <p>Hubungi saya: <a href="mailto:Rizalcs2.rs@gmail.com">Rizalcs2.rs@gmail.com</a></p>
    </footer>

    <!-- Menghubungkan JS -->
    <script src="script.js"></script>

</body>
</html>
