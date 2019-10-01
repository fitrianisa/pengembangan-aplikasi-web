<?php
	require "kalender.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tugas Praktikum 1 Kalender</title>
	<link rel="stylesheet" type="text/css" href="kalender.css">
</head>
<body class="font">
	<h1 class="heading">Kalender 2019</h1>
	<table class="tampilan">
		<?php for ($i=1; $i <= 12 ; $i++) 
		{ 
			//tr buka
			if ($i%3==1)
				{
					echo "<tr>";
				}
					//td isi calender bulan
					echo "<td>";
					display_month($i, 2019);
					echo "</td>";
			//tr tutup
			if ($i%3==0)
				{
					echo "</tr>";
				}
		}
		?>
	</table>
	<h3>Keterangan :</h3>
	<table >
		<?php
			foreach ($holidays as $key => $value) 
			{
				echo "<tr>";
					echo "<td>$key</td>";
					echo "<td>:</td>";
					echo "<td>$value</td>";
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>