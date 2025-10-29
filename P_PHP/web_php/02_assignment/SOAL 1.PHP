<?php
// Deklarasi variabel
$saldoAwal = 1000000;
$bunga = 0.0025;
$bulan = 11;

// Menghitung saldo akhir
$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

// Menampilkan hasil
echo "Saldo awal : Rp. " . number_format($saldoAwal, 0, ',', '.') . "<br>";
echo "Bunga per bulan : " . ($bunga * 100) . "%<br>";
echo "Lama menabung : " . $bulan . " bulan<br>";
echo "------------------------------------<br>";
echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . number_format($saldoAkhir, 0, ',', '.') . "<br>";
?>