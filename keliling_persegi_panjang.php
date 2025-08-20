<?php
function kelilingPersegiPanjang($panjang, $lebar) {
    return 2 * ($panjang + $lebar);
}

// Contoh penggunaan
$panjang = 10;
$lebar = 4;
echo "<h2>Keliling Persegi Panjang</h2>";
echo "Panjang = $panjang <br>";
echo "Lebar = $lebar <br>";
echo "Keliling = " . kelilingPersegiPanjang($panjang, $lebar);
?>
