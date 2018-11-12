<!DOCTYPE html>
<html>
<head>
	<title>Penyisipan Variabel pada HTML</title>
</head>
<body>
Silahkan sebutkan warna kesukaan anda..? <br>
	<?php
	//Berikan adlah inisiasi beberapa variabel
	$warna1 = "Merah";
	$warna2 = "Hijau";
	$warna3 = "Kuning";
	?>
	<b>Di Bawah ini adalah warna kesukaan:<br>
		<?php
		echo "$warna1, $warna2, dan $warna3</b>";
		?>
</body>
</html>