<html>
<head>
    <title>Hasil Perhitungan Bunga</title>
</head>
<body>
    <h1>Hasil Perhitungan Saldo Akhir</h1>
    <hr>
    
<?php
    // 1. Ambil data dari $_POST
    $saldoAwal = $_POST['saldo_awal'];
    $bungaPersen = $_POST['bunga']; // User input misal: 0.25
    $bulan = $_POST['bulan'];
    
    // 2. Konversi bunga dari persen ke desimal
    //    Ini penting! Kemarin 0.0025, user inputnya 0.25
    $bungaDesimal = $bungaPersen / 100;
    
    // 3. Hitung total bunga (Logika sama persis kayak kemarin)
    //    Ingat, bunganya "dari saldo awal" (bunga flat, bukan compound)
    $totalBunga = ($saldoAwal * $bungaDesimal) * $bulan;
    
    // 4. Hitung saldo akhir
    $saldoAkhir = $saldoAwal + $totalBunga;

    // 5. Tampilkan hasilnya
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