function hitungKonversi() {
    // 1. Ambil angka dari input
    let meter = document.getElementById("angkaInput").value;
    
    // 2. Lakukan pengecekan jika input kosong
    if (meter === "") {
        alert("Tolong masukkan angka dulu ya!");
        return;
    }

    // 3. Rumus: 1 Meter = 100 Centimeter
    let cm = meter * 100;

    // 4. Tampilkan hasilnya ke layar
    document.getElementById("hasil").innerHTML = meter + " Meter = " + cm + " CM";
}