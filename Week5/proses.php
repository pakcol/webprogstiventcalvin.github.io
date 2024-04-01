<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Proses</title>
</head>
<body>
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