
const btnToggle = document.querySelector("#btnToggle");
const body = document.body;

let hitungan = 0;

btnToggle.addEventListener("click", () => {
    body.classList.toggle("dark");

    hitungan++;
    console.log(`Mode diganti ${hitungan} kali`);

    const isDark = body.classList.contains("dark");
    localStorage.setItem("darkMode", isDark);
    
    if (isDark) {
        btnToggle.textContent = "☀️ Light Mode";
    } else {
        btnToggle.textContent = "🌙 Dark Mode";
    }
});

if (localStorage.getItem("darkMode") === "true") {
    body.classList.add("dark");
    btnToggle.textContent = "☀️ Light Mode";
}

const isiFakta = document.querySelector("#isi-fakta");
const btnRefresh = document.querySelector("#btnRefresh");

async function ambilFakta() {
    isiFakta.textContent = "⏳ Memuat fakta...";
    try {
        const response = await fetch("https://catfact.ninja/fact");
        
        if (!response.ok) {
            throw new Error("HTTP Error: " + response.status);
        }
        
        const data = await response.json();
        
        isiFakta.textContent = data.fact;
        
    } catch (error) {
        isiFakta.textContent = "⚠️ Gagal memuat fakta. Cek koneksi internet Anda.";
        console.error("Error:", error.message);
    }
}

ambilFakta();

btnRefresh.addEventListener("click", ambilFakta);
