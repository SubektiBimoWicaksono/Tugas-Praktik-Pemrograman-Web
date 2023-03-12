<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
	<header>
		<h1> <br> </h1>
		<nav>
			<ul>
                <li><a href="home.php">Beranda</a></li>
				<li><a href="JHT.php">Hitung JHT</a></li>
				<li><a href="JKK.php">Hitung JKK</a></li>
				<li><a href="JK.php">Hitung JK</a></li>
				<li><a href="JP.php">Hitung JP</a></li>
			</ul>
		</nav>
	</header>
    <div class="container">
	<form method="post">
		<label>Menghitung JHT:</label>
		<input type="number" name="gaji" required>
		<button type="submit">Hitung</button>
	</form>

	<?php
	if (isset($_POST['gaji'])) {
		$gaji = $_POST['gaji'];
		$iuran_jht = $gaji * 0.057;
		$iuran_jht_karyawan = $gaji * 0.02;
		$iuran_jht_perusahaan = $gaji * 0.037;

		echo "<br><strong>Hasil perhitungan:</strong><br>";
		echo "Iuran JHT: Rp" . number_format($iuran_jht, 0, ',', '.') . " per bulan<br>";
		echo "Iuran JHT yang dibayar oleh karyawan: Rp" . number_format($iuran_jht_karyawan, 0, ',', '.') . " per bulan<br>";
		echo "Iuran JHT yang dibayar oleh perusahaan: Rp" . number_format($iuran_jht_perusahaan, 0, ',', '.') . " per bulan<br>";
	}
    ?>
    </div>
	
</body>
</html>