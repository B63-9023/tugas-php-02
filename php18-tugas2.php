<?php 
	echo "<h4>Tugas 2 Page 1 </h4><br>";
	$hari36 = 36;
	$pekerja12 = 12;
	$pekerja24 = 24;

	echo "36 Hari = 12 Pekerja <br>";
	echo "X Hari = 24 Pekerja <br>";
	echo "X = ...? <br>";
	$x36 = $hari36 * $pekerja12;
	$x = $x36 / $pekerja24;
	echo "Jawaban : $x <br>";

	echo "<br><br><br>";

	echo "<h4>Tugas 2 Page 2 <i>//Untung dalam persen</i></h4><br>";
	$jual = 80000;
	$beli = 50000;
	$persen = 100;

	echo "Jual = 80000 <br>";
	echo "Beli = 50000 <br>";
	$untungrupiah = $jual - $beli;
	$untungpersen = $untungrupiah / $beli * $persen;

	echo "Keuntungan = ? <br>";
	echo "Jawaban: $untungpersen%";
?>
