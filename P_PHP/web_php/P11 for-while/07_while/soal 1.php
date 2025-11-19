<?php
if(isset($_POST['hitung'])){
    $saldo = $_POST['saldo'];
    $bulan = $_POST['bulan'];

    for($i = 1; $i <= $bulan; $i++){
        // Tentukan bunga
        if($saldo < 1100000){
            $bunga = 0.03 * $saldo;
        } else {
            $bunga = 0.04 * $saldo;
        }

        // Tambah bunga ke saldo
        $saldo = $saldo + $bunga;

        // Kurangi biaya admin
        $saldo = $saldo - 9000;
    }

    echo "<h3>Saldo akhir setelah $bulan bulan:</h3>";
    echo "<h2>Rp " . number_format($saldo, 0, ',', '.') . "</h2>";
}
?>

<form method="post">
    <label>Saldo Awal:</label><br>
    <input type="number" name="saldo" value="1000000" required><br><br>

    <label>Jumlah Bulan:</label><br>
    <input type="number" name="bulan" required><br><br>

    <input type="submit" name="hitung" value="Hitung Saldo">
</form>
