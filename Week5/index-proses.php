<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 5 - Form</title>
</head>
<body>
	<form method="post" action="index-proses.php">
		<label>Name : </label><input type="text" name="nama" value="" required placeholder="Masukkan Nama Anda!"><br>
		<label>Password : </label><input type="password" name="pass" value="" required placeholder="Masukkan Password"><br>
		<label>Gender : </label><input type="radio" name="gender" value="Laki - laki"> Laki - laki <input type="radio" name="gender" value="Perempuan">Perempuan<br>
		<label>Deskripsi : </label><textarea cols="20" rows="2" name="deskripsi"></textarea><br>
		<label>Makan dimana Hari ini? : </label>
		<select name="pi>
			<option value="Budhe">Budhe </option>
			<option value="Geprek" selected>Geprek </option>
			<option value="Warteg">Warteg </option>
		</select><br>
		<input type="reset" value="Reset"><input type="submit" name="submit" value="Submit">
	</form>
		<?php
			if(isset($_POST['submit'])){
				$nama = $_POST['nama'];
				$pass = $_POST['pass'];
				$gender =$_POST['gender'];
				$deskripsi =$_POST['deskripsi'];
				$pilihan = $_POST['pilihan'];

				echo "<p> Nama : $nama </p>";
				echo "<p> Password : $pass </p>";
				echo "<p> Gender : $gender </p>";
				echo "<p> Deskripsi : $deskripsi </p>"; 
				echo "<p> Makan di : $pilihan </p>"; 
			}

		?>

</body>
</html>