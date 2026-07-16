// script.js — Pertemuan 5: JavaScript Dasar
// File ini berisi logika interaktivitas halaman profil

// Pilih tombol dan body
const btnToggle = document.querySelector("#btnToggle");
const body = document.body;

let hitungan = 0;

// Tambahkan event listener saat tombol diklik
btnToggle.addEventListener("click", () => {
    // Toggle class 'dark' pada <body>
    body.classList.toggle("dark");
    
    // Counter Kunjungan
    hitungan++;
    console.log(`Mode diganti ${hitungan} kali`);

    // Simpan Preferensi Mode (localStorage)
    const isDark = body.classList.contains("dark");
    localStorage.setItem("darkMode", isDark);
    
    // Ganti teks tombol sesuai mode aktif
    if (isDark) {
        btnToggle.textContent = "☀️ Light Mode";
    } else {
        btnToggle.textContent = "🌙 Dark Mode";
    }
});

// Baca preferensi saat halaman dimuat
if (localStorage.getItem("darkMode") === "true") {
    body.classList.add("dark");
    btnToggle.textContent = "☀️ Light Mode";
}
