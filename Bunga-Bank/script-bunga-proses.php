<html>
<head>
    <title>Hasil Perhitungan Bunga</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Akhir</h1>
    <hr>
    
<?php
    $saldoAwal = $_POST['saldo_awal'];
    $bungaPersen = $_POST['bunga'];
    $bulan = $_POST['bulan'];
    $bungaDesimal = $bungaPersen / 100;
    $totalBunga = ($saldoAwal * $bungaDesimal) * $bulan;
    $saldoAkhir = $saldoAwal + $totalBunga;

    echo "<p>Berikut adalah hasil perhitungan Anda:</p>";
    echo "<table>";
    echo "<tr><td>Saldo Awal</td><td>: Rp. " . number_format($saldoAwal) . "</td></tr>";
    echo "<tr><td>Bunga per Bulan</td><td>: " . $bungaPersen . " %</td></tr>";
    echo "<tr><td>Lama Menabung</td><td>: " . $bulan . " bulan</td></tr>";
    echo "<tr><td>Total Bunga Didapat</td><td>: Rp. " . number_format($totalBunga) . "</td></tr>";
    echo "<tr><td><b>Saldo Akhir</b></td><td><b>: Rp. " . number_format($saldoAkhir) . "</b></td></tr>";
    echo "</table>";
    
    echo '<br><a href="script-bunga.php">Kembali ke Kalkulator</a>';
?>

</body>
</html>