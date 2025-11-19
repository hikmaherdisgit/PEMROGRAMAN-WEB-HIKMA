<?php
$jumlah = 0;

echo "<h3>Daftar pasangan x, y, z yang memenuhi x + y + z = 25</h3>";

for($x = 1; $x <= 23; $x++){
    for($y = 1; $y <= 24 - $x; $y++){
        $z = 25 - ($x + $y);

        if($z >= 1){
            echo "x = $x, y = $y, z = $z <br>";
            $jumlah++;
        }
    }
}

echo "<br><h3>Jumlah penyelesaian: $jumlah</h3>";
?>
