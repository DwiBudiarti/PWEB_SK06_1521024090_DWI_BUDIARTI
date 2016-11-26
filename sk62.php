<?php
echo "<h3>Persegi Panjang dan Balok</h3>";
$p = 20;
echo "Panjang (persegi panjang dan balok) = ".$p;
echo " (2 karakter kedua dari NIM)";
echo "<br>";

$l = 15;
echo "Lebar (persegi panjang dan balok) = ".$l;
echo " (2 karakter Pertama dari NIM)";
echo "<br>";

$t = 10;
echo "Tinggi balok = ".$t;
echo " (2 karakter ketiga dari NIM)";
echo "<br>";

$ls1 = 2*($p+$l);
echo "Luas persegi panjang = ".$ls1;
echo "<br>";

$ls = 2*(($p*$l)+($l*$t)+($p*$t));
echo "Luas seluruh Permukaan Balok = ".$ls;
echo "<br>";
$vl = $p*$l*$t;
echo "Volume Balok = ".$vl;
echo "<br>";

?>