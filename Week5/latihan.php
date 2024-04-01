<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week5 - Latihan Proses</title>
</head>
<body>
	<form method="post" action="latihan.php">
		<input type="number" name="angka">
		<input type="submit" name="submit">
	</form>
	<?php
		if(isset($_POST['submit'])){

			$angka = $_POST['angka'];
			if($angka % 2 == 0){
				//echo "Angka adalah $angka, GENAP";
				header ("location: latihan-prosesGenap.php?angka=$angka");
			}
			else{
				//echo "Angka adalah $angka, GANJIL";
				header ("location: latihan-prosesGanjil.php?angka=$angka");
			}
		}

	?>
</body>
</html>