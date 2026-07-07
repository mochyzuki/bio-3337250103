<?php

$mahasiswa = [
 "nama"  => "Budi Santoso",
 "nim"   => "3411221001",
 "prodi" => "Informatika",
 "ipk"   => 3.85,
 "skill" => ["HTML", "CSS", "JavaScript", "PHP"],
];

$daftar = [
 ["nama" => "Budi",  "ipk" => 3.85],
 ["nama" => "Ani",   "ipk" => 3.72],
 ["nama" => "Citra", "ipk" => 3.91],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Data Mahasiswa - <?= $mahasiswa['nama'] ?></title>
 <meta name="description" content="Halaman data mahasiswa beserta daftar IPK.">
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
   <a href="latihan.php" id="nav-latihan">
    <span class="nav-icon">📝</span> Latihan
   </a>
   <a href="mahasiswa.php" class="active" id="nav-mahasiswa">
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
     <h1>Data Mahasiswa</h1>
     <p class="tagline">Informasi mahasiswa dan daftar IPK</p>
    </div>
    <button id="btnToggle">🌙 Dark Mode</button>
   </div>
  </header>

  <main>
   <section>
    <h2>🎓 Profil Mahasiswa</h2>
    <div class="profile-info">
     <p><strong>Nama:</strong> <?= $mahasiswa['nama'] ?></p>
     <p><strong>NIM:</strong> <?= $mahasiswa['nim'] ?></p>
     <p><strong>Prodi:</strong> <?= $mahasiswa['prodi'] ?></p>
     <p><strong>IPK:</strong> <?= $mahasiswa['ipk'] ?></p>
    </div>
   </section>

   <section>
    <h2>🛠️ Skill</h2>
    <div class="skill-list">
     <?php foreach ($mahasiswa['skill'] as $skill): ?>
      <span class="skill-item"><?= $skill ?></span>
     <?php endforeach; ?>
    </div>
   </section>

   <section>
    <h2>📊 Daftar IPK</h2>
    <table>
     <thead>
      <tr>
       <th>Nama</th>
       <th>IPK</th>
       <th>Status</th>
      </tr>
     </thead>
     <tbody>
      <?php foreach ($daftar as $mhs): ?>
       <tr>
        <td><?= $mhs['nama'] ?></td>
        <td><?= $mhs['ipk'] ?></td>
        <td>
         <?php if ($mhs['ipk'] >= 3.75): ?>
          <span class="badge">Cumlaude 🌟</span>
         <?php else: ?>
          Reguler
         <?php endif; ?>
        </td>
       </tr>
      <?php endforeach; ?>
     </tbody>
    </table>
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
