<html>
<head>
    <title>Hasil Perhitungan Pecahan Uang</title>
</head>
<body>
    <h1>Hasil Perhitungan Pecahan Uang</h1>
    <hr>

<?php
    $jumlahUang = $_POST['jumlah_uang'];

    echo "<p>Total uang <b>Rp. " . number_format($jumlahUang) . "</b>, dipecah menjadi:</p>";

    $a = floor($jumlahUang / 100000);
    $sisa = $jumlahUang % 100000;

    $b = floor($sisa / 50000);
    $sisa = $sisa % 50000;

    $c = floor($sisa / 20000);
    $sisa = $sisa % 20000;

    $d = floor($sisa / 5000);
    $sisa = $sisa % 5000;

    $e = floor($sisa / 100);
    $sisa = $sisa % 100;

    $f = floor($sisa / 50);
    $sisa_akhir = $sisa % 50;

    echo "<table>";
    echo "<tr><td>Jumlah Rp. 100.000</td><td>:</td><td><b>" . $a . "</b> lembar</td></tr>";
    echo "<tr><td>Jumlah Rp. 50.000</td><td>:</td><td><b>" . $b . "</b> lembar</td></tr>";
    echo "<tr><td>Jumlah Rp. 20.000</td><td>:</td><td><b>" . $c . "</b> lembar</td></tr>";
    echo "<tr><td>Jumlah Rp. 5.000</td><td>:</td><td><b>" . $d . "</b> lembar</td></tr>";
    echo "<tr><td>Jumlah Rp. 100</td><td>:</td><td><b>" . $e . "</b> koin</td></tr>";
    echo "<tr><td>Jumlah Rp. 50</td><td>:</td><td><b>" . $f . "</b> koin</td></tr>";
    
    if ($sisa_akhir > 0) {
        echo "<tr><td><b>Sisa Uang</b></td><td>:</td><td><b>Rp. " . $sisa_akhir . "</b></td></tr>";
    }
    
    echo "</table>";
    
    echo '<br><a href="script-pecahan.php">Kembali ke Kalkulator</a>';
?>

</body>
</html>