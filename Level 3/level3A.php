<!DOCTYPE html>
<html>
<head>
	<title>Biggest Number and Sorting</title>
</head>
<body>
	<h2>input 3 angka dan akan di urutkan dari paling kecil sampai terbesar :</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<label for="angka1">Angka 1:</label>
		<input type="number" name="angka1" required><br><br>
		<label for="angka2">Angka 2:</label>
		<input type="number" name="angka2" required><br><br>
		<label for="angka3">Angka 3:</label>
		<input type="number" name="angka3" required><br><br>	
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$angka1 = $_POST["angka1"];
			$angka2 = $_POST["angka2"];
			$angka3 = $_POST["angka3"];

			//Tentukan bilangan terbesar
			$terbesar = $angka1;
			if ($angka2> $terbesar) {
				$terbesar = $angka2;
			}
			if ($angka3 > $terbesar) {
				$terbesar = $angka3;
			}
			echo "Angka terbesar adalah: " . $terbesar . "<br><br>";

			// Urutkan angka dari rendah ke tinggi
			$angkas = array($angka1, $angka2, $angka3);
			sort($angkas);
			echo "urutan angka: " . implode(", ", $angkas);
		}
	?>
	    <a href="level3B.php">LEVEL SELANJUTNYA</a>
</body>
</html>