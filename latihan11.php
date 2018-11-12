<?

// inisialisasi variabel

$a = "USS Enterprise";

$b = "Menurut catatan Kapten";

$c = "Menguji Planet Vulcan";

//alternatif pertama

$alt1 = $a . " " . $c . "," . $b . ".";

//alternatif pertama

$alt2 = $b . " " . $a . "," . $c . ",";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan String</title>
</head>
<body>
String yang pertama adalah : <br>
<?php echo $alt1; ?>
<br><br>
String yang kedua adalah : <br>
<?php echo $alt2; ?>
</body>
</html>