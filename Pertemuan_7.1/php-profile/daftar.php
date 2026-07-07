<?php
$daftar = [
 ["nama" => "Budi Santoso",   "nim" => "001", "ipk" => 3.85],
 ["nama" => "Ani Rahayu",     "nim" => "002", "ipk" => 3.72],
 ["nama" => "Citra Dewi",     "nim" => "003", "ipk" => 3.91],
 ["nama" => "Dodi Pratama",   "nim" => "004", "ipk" => 2.95],
 ["nama" => "Eka Wulandari",  "nim" => "005", "ipk" => 3.55],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Daftar Mahasiswa</title>
 <meta name="description" content="Daftar seluruh mahasiswa beserta NIM, IPK, dan status kelulusan.">
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
   <a href="daftar.php" class="active" id="nav-daftar">
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
     <h1>Daftar Mahasiswa</h1>
     <p class="tagline">Data seluruh mahasiswa beserta status IPK</p>
    </div>
    <button id="btnToggle">🌙 Dark Mode</button>
   </div>
  </header>

  <main>
   <section>
    <h2>📋 Tabel Mahasiswa</h2>
    <table>
     <thead>
      <tr>
       <th>No</th>
       <th>Nama</th>
       <th>NIM</th>
       <th>IPK</th>
       <th>Status</th>
      </tr>
     </thead>
     <tbody>
      <?php foreach ($daftar as $i => $mhs): ?>
       <tr>
        <td><?= $i + 1 ?></td>
        <td><?= $mhs['nama'] ?></td>
        <td><?= $mhs['nim'] ?></td>
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
