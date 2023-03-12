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
		<label>Upah Pekerja:</label>
		<input type="number" name="upah2" required>
		<br>
		<button type="submit">Hitung</button>
	</form>

	<?php
	if (isset($_POST['upah2'])) {
		$upah2 = $_POST['upah2'];
		$upah_max = 8754600; // maksimum upah yang diperhitungkan
		if ($upah2 > $upah_max) {
			$upah2 = $upah_max;
		}
        $iuran_jp = $upah2 * 0.03;
		$iuran_jp_perusahaan = $upah2 * 0.02;
		$iuran_jp_pekerja = $upah2 * 0.01;

		echo "<br><strong>Hasil perhitungan:</strong><br>";
		echo "Iuran JP yang dibayar oleh perusahaan: Rp" . number_format($iuran_jp_perusahaan, 0, ',', '.') . " per bulan<br>";
		echo "Iuran JP yang dibayar oleh pegawai: Rp" . number_format($iuran_jp_pekerja, 0, ',', '.') . " per bulan<br>";
		echo "Iuran JP yang harus dibayar: Rp" . number_format($iuran_jp, 0, ',', '.') . " per bulan<br>";
	}
	?>
    </div>
	
</body>
</html>