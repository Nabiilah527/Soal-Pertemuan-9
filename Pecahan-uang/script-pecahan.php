<html>
<head>
    <title>Kalkulator Pecahan Uang</title>
</head>
<body>
    <h1>Kalkulator Pecahan Uang</h1>
    
    <p>Masukkan total jumlah uang untuk dihitung pecahannya:</p>
    
    <form method="post" action="script-pecahan-proses.php">
        <table>
            <tr>
                <td>Jumlah Uang (Rp)</td>
                <td>:</td>
                <td><input type="number" name="jumlah_uang" size="20"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Hitung Pecahan">
                    <input type="reset" name="reset" value="Hapus">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>