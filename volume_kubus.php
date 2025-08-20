<?php
function volumeKubus($sisi) {
    return pow($sisi, 3);
}

// Contoh penggunaan
$sisi = 5;
echo "<h2>Volume Kubus</h2>";
echo "Sisi = $sisi <br>";
echo "Volume = " . volumeKubus($sisi);
?>
