<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 5 - Form & Date</title>
</head>
<body>
	<form method="post" action="proses.php">
		<label>Name : </label><input type="text" name="nama" value="" required placeholder="Masukkan Nama Anda!"><br>
		<label>Password : </label><input type="password" name="pass" value="" required placeholder="Masukkan Password"><br>
		<label>Gender : </label><input type="radio" name="gender" value="Laki - laki"> Laki - laki <input type="radio" name="gender" value="Perempuan">Perempuan<br>
		<label>Deskripsi : </label><textarea cols="20" rows="2" name="deskripsi"></textarea><br>
		<label>Makan dimana Hari ini? : </label>
		<select name="pilihan">
			<option value="Budhe">Budhe </option>
			<option value="Geprek" selected>Geprek </option>
			<option value="Warteg">Warteg </option>
		</select><br>
		<input type="reset" value="Reset"><input type="submit" name="submit" value="Submit">
	</form>
	<?php
		$tgl = date("D M j G:i:s T Y",strtotime("now"));
		echo "$tgl <br>";

		$tgl = date("H:i:s",strtotime("now"));
		echo "$tgl <br>";

		$tgl = date("H:i:s",strtotime("+10 seconds"));
		echo "$tgl <br>";

		$tgl = date("d-m-Y", strtotime("+12 days"));
		echo "$tgl <br>";

		$tgl1 = '2024-03-25';
		echo date("d-m-Y", strtotime($mydate));

		$tgl2 = '2024-03-20';
		$selisih = strtotime($tgl1) - strtotime($tgl2);
		echo ($selisih / (60*60*24)) . "<br>;


	?>
</body>
</html>