<?php

$nama   = "Muhammad Rizal Chaerul Syahputra";
$nim    = "3337250103";
$ipk    = 3.90;
$aktif  = true;
$skill  = ["HTML", "CSS", "JavaScript", "PHP"];

if ($ipk >= 3.75) {
 $status = "Cumlaude 🌟";
} elseif ($ipk >= 3.0) {
 $status = "Sangat Memuaskan";
} else {
 $status = "Memuaskan";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Latihan PHP - <?= $nama ?></title>
 <meta name="description" content="Halaman latihan PHP menampilkan data variabel dan perulangan skill.">
 <link rel="stylesheet" href="style.css">
</head>
<body>

 <!-- SIDEBAR -->
 <aside class="sidebar">
  <div class="sidebar-brand">
   <h2>Muhammad Rizal Chaerul Syahputra</h2>
   <p>Informatika • 2025</p>
  </div>
  <nav>
   <span class="sidebar-label">Menu</span>
   <a href="profil.php" id="nav-profil">
    <span class="nav-icon">👤</span> Profil
   </a>
   <a href="daftar.php" id="nav-daftar">
    <span class="nav-icon">📋</span> Daftar Mahasiswa
   </a>
   <a href="latihan.php" class="active" id="nav-latihan">
    <span class="nav-icon">📝</span> Latihan
   </a>
   <a href="mahasiswa.php" id="nav-mahasiswa">
    <span class="nav-icon">🎓</span> Data Mahasiswa
   </a>
  </nav>
  <div class="sidebar-footer">Pertemuan 7.1 • PHP</div>
 </aside>

 <!-- MAIN WRAPPER -->
 <div class="wrapper">
  <header>
   <div class="header-content">
    <div>
     <h1>Latihan PHP</h1>
     <p class="tagline">Variabel, kondisional, dan perulangan</p>
    </div>
    <button id="btnToggle">🌙 Dark Mode</button>
   </div>
  </header>

  <main>
   <section>
    <h2>👋 Data Mahasiswa</h2>
    <div class="profile-info">
     <p><strong>Nama:</strong> <?= $nama ?></p>
     <p><strong>NIM:</strong> <?= $nim ?></p>
     <p><strong>IPK:</strong> <?= $ipk ?></p>
     <p><strong>Status:</strong> <span class="badge"><?= $status ?></span></p>
     <p><strong>Aktif:</strong> <?= $aktif ? 'Ya ✅' : 'Tidak ❌' ?></p>
    </div>
   </section>

   <section>
    <h2>🛠️ Skill</h2>
    <div class="skill-list">
     <?php foreach ($skill as $item): ?>
      <span class="skill-item"><?= $item ?></span>
     <?php endforeach; ?>
    </div>
   </section>

   <section>
    <h2>📊 Kondisional IPK</h2>
    <?php if ($ipk >= 3.75): ?>
     <p style="color:#21B0A7;"><strong>🎉 Selamat! Anda meraih predikat <?= $status ?>.</strong></p>
    <?php elseif ($ipk >= 3.0): ?>
     <p>Anda lulus dengan predikat <?= $status ?>.</p>
    <?php else: ?>
     <p>Anda lulus dengan predikat <?= $status ?>.</p>
    <?php endif; ?>
   </section>
  </main>

  <footer>
   <p>Pertemuan 7.1 — Pemrograman Web &copy; 2025</p>
  </footer>
 </div>

 <script>
  const btnToggle = document.getElementById('btnToggle');
  const body = document.body;
  if (localStorage.getItem('darkMode') === 'true') {
   body.classList.add('dark');
   btnToggle.textContent = '☀️ Light Mode';
  }
  btnToggle.addEventListener('click', () => {
   body.classList.toggle('dark');
   const isDark = body.classList.contains('dark');
   localStorage.setItem('darkMode', isDark);
   btnToggle.textContent = isDark ? '☀️ Light Mode' : '🌙 Dark Mode';
  });
 </script>
</body>
</html>
