<?php
$mahasiswa = [
 "nama"     => "Muhammad Rizal Chaerul Syahputra",
 "nim"      => "3337250103",
 "prodi"    => "Informatika",
 "angkatan" => 2025,
 "ipk"      => 3.85,
 "email"    => "rizalchaeruls.rs@gmail.com",
 "github"   => "https://github.com/mocyzuki",
 "skill"    => ["HTML", "CSS", "JavaScript", "PHP", "Git"],
 "bio"      => "Saya adalah mahasiswa Informatika UNTIRTA yang bersemangat belajar teknologi web.",
];

function badgeStatus($ipk) {
 if ($ipk >= 3.75) return "Cumlaude 🌟";
 if ($ipk >= 3.00) return "Sangat Memuaskan";
 return "Memuaskan";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Profil - <?= $mahasiswa['nama'] ?></title>
 <meta name="description" content="Halaman profil mahasiswa <?= $mahasiswa['nama'] ?>, NIM <?= $mahasiswa['nim'] ?>, Program Studi <?= $mahasiswa['prodi'] ?>.">
 <link rel="stylesheet" href="style.css">
</head>
<body>

 <!-- SIDEBAR -->
 <aside class="sidebar">
  <div class="sidebar-brand">
   <h2><?= $mahasiswa['nama'] ?></h2>
   <p><?= $mahasiswa['prodi'] ?> • <?= $mahasiswa['angkatan'] ?></p>
  </div>
  <nav>
   <span class="sidebar-label">Menu</span>
   <a href="profil.php" class="active" id="nav-profil">
    <span class="nav-icon">👤</span> Profil
   </a>
   <a href="daftar.php" id="nav-daftar">
    <span class="nav-icon">📋</span> Daftar Mahasiswa
   </a>
   <a href="latihan.php" id="nav-latihan">
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
     <h1><?= $mahasiswa['nama'] ?></h1>
     <p class="tagline"><?= $mahasiswa['prodi'] ?> • Angkatan <?= $mahasiswa['angkatan'] ?> &nbsp;|&nbsp; <span><?= badgeStatus($mahasiswa['ipk']) ?></span></p>
    </div>
    <button id="btnToggle">🌙 Dark Mode</button>
   </div>
  </header>

  <main>
   <section>
    <h2>Tentang Saya</h2>
    <div class="profile-info">
     <p><?= $mahasiswa['bio'] ?></p>
     <p><strong>NIM:</strong> <?= $mahasiswa['nim'] ?></p>
     <p><strong>IPK:</strong> <?= $mahasiswa['ipk'] ?> &nbsp;<span class="badge"><?= badgeStatus($mahasiswa['ipk']) ?></span></p>
     <p><strong>Email:</strong> <a href="mailto:<?= $mahasiswa['email'] ?>"><?= $mahasiswa['email'] ?></a></p>
     <p><strong>GitHub:</strong> <a href="<?= $mahasiswa['github'] ?>" target="_blank"><?= $mahasiswa['github'] ?></a></p>
    </div>
   </section>

   <section>
    <h2>Skill</h2>
    <div class="skill-list">
     <?php foreach ($mahasiswa['skill'] as $skill): ?>
      <span class="skill-item"><?= $skill ?></span>
     <?php endforeach; ?>
    </div>
   </section>

   <section>
    <h2>Kondisional Berdasarkan IPK</h2>
    <?php if ($mahasiswa['ipk'] >= 3.75): ?>
     <p style="color:#21B0A7;"><strong>🎉 Selamat! Anda meraih predikat Cumlaude.</strong></p>
    <?php elseif ($mahasiswa['ipk'] >= 3.0): ?>
     <p>Anda lulus dengan predikat Sangat Memuaskan.</p>
    <?php else: ?>
     <p>Anda lulus dengan predikat Memuaskan.</p>
    <?php endif; ?>
   </section>
  </main>

  <footer>
   <p>Hubungi saya: <a href="mailto:<?= $mahasiswa['email'] ?>"><?= $mahasiswa['email'] ?></a></p>
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
