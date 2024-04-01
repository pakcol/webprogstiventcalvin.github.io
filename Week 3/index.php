<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Week 3 - Server Side Scripting</title>
	<style type="text/css">
		#judul{
			color: ghostwhite;
			font-family: sans-serif;
			font-size: 30px;
		}
		#highlight{
			color: darkseagreen;
			font-style: italic;
		}
		.odd-record { 
			color: blue; 
		}
		.even-record { 
			color: green;
		}
		.latar-cerah {
			background-color : gold;
		}
		.latar-gelap {
			background-color : orange;
		}
	</style>
</head>
<body>
	<h2 id='judul'> Week 3 </h2>
		<?php
			echo "<h4> This Hello is Generated from PHP </h4>";
			$myname = "Stivent";
			echo "My Name is <strong> $myname </strong>";

			$first_name = "Stivent";
			$last_name = "PakCoL";
			$name = $first_name . " " . $last_name;
			echo "<br> My Full name is <strong id='highlight'> $name </strong>";
		?>
	<h3>LATIHAN BODY</h3>
		<?php
			$angka = mt_rand(1,10);

			if ($angka % 2 == 0){ //genap
				$style = "latar-cerah";
				//echo "<body class=\"latar-cerah\">";
			}
			else{ //ganjil
				$style = "latar-gelap";
				//echo "<body class=\"latar-gelap\">";
			}
			//echo"</body>";
		?>
	<body class="<?php echo $style; ?>">
	</body>
	<h3>Exercise 1</h3>
		<?php
			$myteam = "Justice League";
			$yourteam = "The Avengers";
			$myleader = "Batman";
			$yourleader = "Ironman";
			echo "<u>$myteam</u> is a group of heroes led by <strong>\"$myleader\"</strong>. Another Group, <u>$yourteam</u>, is led by <strong>\"$yourleader\"</strong>. ";
		?>
	<h3>Exercise 2</h3>
		<?php
			$randomNum = rand(1,10);
			for ($i=1; $i <= $randomNum ; $i++) { 
				echo "Record $i <br>";
			}
		?>
	<h3>Exercise 2 - Cont.</h3>
		<?php
			$randomNum = rand(1,10);
			
			for ($i=1; $i <= $randomNum ; $i++) { 
				if($randomNum % 2 == 0){
					$styleNum = "odd-record";
				}
				else{
					$styleNum = "even-record";
				}
				echo "<p class=\"$styleNum\"> Record $i </p>";
			}
		?>
</body>
</html>