<html>
<head>
    <title>Hitung Bunga Bank</title>
</head>
<body>
    <h1>Kalkulator Saldo Akhir (Bunga Bank)</h1>
    
    <p>Silakan masukkan data untuk perhitungan:</p>
    
    <form method="post" action="script-bunga-proses.php">
        <table>
            <tr>
                <td>Saldo Awal (Rp)</td>
                <td>:</td>
                <td><input type="number" name="saldo_awal"></td>
            </tr>
            <tr>
                <td>Bunga per Bulan (%)</td>
                <td>:</td>
                <td><input type="text" name="bunga" size="5"> %</td>
            </tr>
            <tr>
                <td>Lama Bulan</td>
                <td>:</td>
                <td><input type="number" name="bulan"> bulan</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                    <input type="reset" name="reset" value="Hapus">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>