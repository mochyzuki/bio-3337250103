// script.js - Sangat sederhana (Hanya untuk fitur Dark Mode)

const btnToggle = document.getElementById("btnToggle");
const body = document.body;

btnToggle.addEventListener("click", function() {
    // Menambah atau menghapus class 'dark' pada tag <body>
    body.classList.toggle("dark");

    // Mengubah teks tombol sesuai dengan mode yang aktif
    if (body.classList.contains("dark")) {
        btnToggle.textContent = "☀️ Light Mode";
    } else {
        btnToggle.textContent = "🌙 Dark Mode";
    }
});
