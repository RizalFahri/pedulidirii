<?php 
session_start();
if (isset($_POST['simpan'])) {
	$tanggal = $_POST['tanggal'];
	$jam = $_POST['jam'];
	$lokasi = $_POST['lokasi'];
	$suhu = $_POST['suhu'];
	$namalengkap = $_SESSION['username'];
	$text = $tanggal . "," . $jam .  "," . $lokasi . "," . $suhu . "</tr>\n";
	$data = "catatan/$namalengkap.txt";
	$dirname = dirname($data);
	if (!is_dir($dirname)) {
		mkdir($dirname, 0755, true);
	}
	$fp = fopen($data, 'a+');
	if (fwrite($fp, $text)) {
		echo '<script>alert("Catatan Anda Berhasil Disimpan!");</script>';
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>APLIKASI PEDULI DIRI</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
</head>
<body>
	<div class="bungkus_2">
		<div class="bagian_atas">
			<div class="logo"></div>
			<div class="text_2">
				<div><p class="txt_judul">APLIKASI PEDULI DIRI</p></div>
				<div class="txt_subjudul"><p>Aplikasi ini dibuat oleh Rizal Fahri Irawan Kelas 12 RPL 1</p></div>
				</div>
			<a href="index.php" class="btn_logout">LOGOUT</a>
		</div>
		<div class="bagian_bawah">
			<div class="container">
				<h1><a href="index.php">Hai <?php echo $_SESSION['username']?> </a></h1>
				<ul>
					<li><a href="halaman_utama.php">Home</a></li>
					<li><a href="catatan_perjalanan.php">Catatan Perjalanan</a></li>
					<li class="active"><a href="isi_data.php">Isi Data</a></li>
				</ul>
			</div>
			<div class="bagian_ngisorpisan">
			<form action="" method="POST">
				<table>
					<tr>
						<td>Tanggal</td>
						<td><input type="date" name="tanggal"></td>
					</tr>
					<tr>
						<td>Jam</td>
						<td><input type="time" name="jam"></td>
					</tr>
					<tr>
						<td>Lokasi Yang Dikunjungi</td>
						<td><input type="text" name="lokasi"></td>
					</tr>
					<tr>
						<td>Suhu Tubuh</td>
						<td><input type="text" name="suhu"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="simpan" value="Simpan"></td>
					</tr>
				</table>
			</form>
		</div>
		</div>
	</div>
</body>
</html>