<?php
function luasLingkaran($jari2) {
    return pi() * pow($jari2, 2);
}

// Contoh penggunaan
$jari2 = 7;
echo "<h2>Luas Lingkaran</h2>";
echo "Jari-jari = $jari2 <br>";
echo "Luas = " . luasLingkaran($jari2);
?>
