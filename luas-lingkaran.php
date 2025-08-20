<?php
function luasLingkaran($jari2) {
    return pi() * pow($jari2, 2);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Lingkaran</title>
</head>
<body>
    <h2>Hitung Luas Lingkaran</h2>

    <form method="post">
        <label for="jari2">Masukkan Jari-jari (r): </label>
        <input type="number" name="jari2" id="jari2" step="any" required>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jari2 = $_POST['jari2'];

        if ($jari2 > 0) {
            $luas = luasLingkaran($jari2);
            echo "<p>Jari-jari: $jari2</p>";
            echo "<p>Luas Lingkaran: " . round($luas, 2) . "</p>";
        } else {
            echo "<p>Masukkan nilai jari-jari yang valid!</p>";
        }
    }
    ?>
</body>
</html>
