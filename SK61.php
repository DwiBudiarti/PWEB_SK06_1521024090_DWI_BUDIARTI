<?php
echo "<h3> Lingkaran</h3>";
$d = "090 ";
echo "jari-jari : ".$d;

echo "(3 karakter terakhir dari NIM)";
echo "<br>";
$r = $d/2;
echo "diameter : ".$r;
echo "<br>";
$p = "3.14";
$ls1 = 1;
	for($a=1;$a<=2;$a++)
	{
		$ls1 = $ls1*$r;
		$ls = $ls1*$p;
	}
echo "Luas Lingkaran = " . $ls . " satuan Luas";
echo "<br>";

$kl = 2*$p*$r;
echo "Keliling Lingkaran = " . $kl . " satuan keliling";
echo "<br>";

$vl1 = 1;
	for($i=1;$i<3;$i++)
	{
		$vl1 = $vl1*$r;
		$vl = 4/3*$vl1*$p;
	}
echo "Volume Lingkaran / Bola = ".$vl." Satuan Volume";
echo "<br>";
?>