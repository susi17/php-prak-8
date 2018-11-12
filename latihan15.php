<!DOCTYPE html>
<html>
<head>
	<title>Struktur kendali IF...ELSEIF</title>
</head>
<body>
<?php
	$waktu = getdate();
	if ($waktu[hour] <= 10)
	{
		echo "Selamat Pagi";
	}
	elseif ($waktu[hour] <= 15)
	{
		echo "Selamat Siang";
	}
	elseif ($waktu[hours] <= 18)
	{
		echo "Selamat Sore";
	}
	else
	{
		echo "Selamat Malam";
	}
?>
</body>
</html>