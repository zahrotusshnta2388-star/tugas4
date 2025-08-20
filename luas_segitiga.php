<?php
function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Contoh penggunaan
$alas = 8;
$tinggi = 6;
echo "<h2>Luas Segitiga</h2>";
echo "Alas = $alas <br>";
echo "Tinggi = $tinggi <br>";
echo "Luas = " . luasSegitiga($alas, $tinggi);
?>
