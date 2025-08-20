<?php
// ================================
// KUMPULAN RUMUS MTK + SOAL LATIHAN
// ================================

// Fungsi rumus matematika
function luas_persegi($sisi) {
    return $sisi * $sisi;
}  

function luas_segitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

function luas_lingkaran($jari_jari) {
    return M_PI * pow($jari_jari, 2); // M_PI adalah konstanta π (3.14...)
}

function keliling_lingkaran($jari_jari) {
    return 2 * M_PI * $jari_jari;
}

function luas_persegi_panjang($panjang, $lebar) {
    return $panjang * $lebar;
}

// Soal dan jawaban otomatis
function tampilkan_soal() {
    echo "Soal 1: Hitung luas persegi dengan sisi 8 cm.<br>";
    echo "Jawaban: " . luas_persegi(8) . " cm²<br><br>";

    echo "Soal 2: Hitung luas segitiga dengan alas 10 cm dan tinggi 6 cm.<br>";
    echo "Jawaban: " . luas_segitiga(10, 6) . " cm²<br><br>";

    echo "Soal 3: Hitung luas lingkaran dengan jari-jari 7 cm.<br>";
    echo "Jawaban: " . round(luas_lingkaran(7), 2) . " cm²<br><br>";

    echo "Soal 4: Hitung keliling lingkaran dengan jari-jari 14 cm.<br>";
    echo "Jawaban: " . round(keliling_lingkaran(14), 2) . " cm<br><br>";

    echo "Soal 5: Hitung luas persegi panjang dengan panjang 12 cm dan lebar 5 cm.<br>";
    echo "Jawaban: " . luas_persegi_panjang(12, 5) . " cm²<br><br>";
}

// Panggil fungsi soal
tampilkan_soal();
?>
