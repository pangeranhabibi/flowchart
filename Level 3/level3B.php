<!DOCTYPE html>
<html>
<head>
	<title>Nilai terkecil dan terbesar</title>
</head>
<body>
	<h2>input 3 angka agar mengetahui Nilai Besar dan Kecil:</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="nilai1">Angka 1:</label>
		<input type="number" name="nilai1" required><br><br>
		<label for="nilai2">Angka 2:</label>
		<input type="number" name="nilai2" required><br><br>
		<label for="nilai3">Angka 3:</label>
		<input type="number" name="nilai3" required><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nilai1 = $_POST["nilai1"];
			$nilai2 = $_POST["nilai2"];
			$nilai3 = $_POST["nilai3"];

			// Tentukan bilangan terbesar
			$terbesar = $nilai1;
			if ($nilai2 > $terbesar) {
				$terbesar = $nilai2;
			}
			if ($nilai3 > $terbesar) {
				$terbesar = $nilai3;
			}
			echo "Nilai terbesar: " . $terbesar . "<br><br>";

			// Tentukan nilai tengahnya
			$terkecil = $nilai1;
			if (($nilai2 > $nilai1 && $nilai2 < $nilai3) || ($nilai2 < $nilai1 && $nilai2 > $nilai3)) {
				$terkecil = $nilai2;
			}
			if (($nilai3 > $nilai1 && $nilai3 < $nilai2) || ($nilai3 < $nilai1 && $nilai3 > $nilai2)) {
				$terkecil = $nilai3;
			}
			echo "Nilai terkecil adalah: " . $terkecil;
		}
	?>
    <br>
    <a href="level3A.php">LEVEL SEBELUMNYA</a>
    <br>
    <br>
    <a href="level3C.php">LEVEL SELANJUTNYA</a>
</body>
</html>