<!DOCTYPE html>
<html>
<head>
	<title>Struktur kendala dengan SWITCH</title>
</head>
<body>
<?php
	$english = date("1");
	switch ($english_day)
	{
		case "Monday":
			$indonesian = "Senin";
			break;
		case "Tuesday":
			$indonesian = "Selasa";
			break;
		case "Wednesday":
			$indonesian = "Rabu";
			break;
		case "Thursday":
			$indonesian = "Kamis";
			break;
		case "Friday":
			$indonesian = "Jumat";
			break;
		case "Saturday":
			$indonesian = "Sabtu";
			braek;
		Default:
			$indonesian = "Minggu";
		}
		echo "<h2>Hari ini adalah hari $indonesian</h2>";
		?>
</body>
</html>