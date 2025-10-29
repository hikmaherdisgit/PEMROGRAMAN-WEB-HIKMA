<?php
// Jumlah uang yang dimiliki
$jumlahUang = 1575250;

// Menghitung jumlah masing-masing pecahan
$sa = floor($jumlahUang / 100000);
$sisa = $jumlahUang % 100000;

$sb = floor($sisa / 50000);
$sisa = $sisa % 50000;

$sc = floor($sisa / 20000);
$sisa = $sisa % 20000;

$sd = floor($sisa / 5000);
$sisa = $sisa % 5000;

$se = floor($sisa / 100);
$sisa = $sisa % 100;

$sf = floor($sisa / 50);

// Menampilkan hasil
echo "Jumlah uang: Rp. " . number_format($jumlahUang, 0, ',', '.') . "<br><br>";
echo "Pecahan Rp. 100.000 : " . $sa . " lembar<br>";
echo "Pecahan Rp. 50.000  : " . $sb . " lembar<br>";
echo "Pecahan Rp. 20.000  : " . $sc . " lembar<br>";
echo "Pecahan Rp. 5.000   : " . $sd . " lembar<br>";
echo "Pecahan Rp. 100     : " . $se . " lembar<br>";
echo "Pecahan Rp. 50      : " . $sf . " lembar<br>";
?>