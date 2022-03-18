<?php 
session_start();
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
				<div class="txt_judul"><p>APLIKASI PEDULI DIRI</p></div>
				<div class="txt_subjudul"><p>Aplikasi ini dibuat oleh Rizal Fahri Irawan Kelas 12 RPL 1</p></div>
				</div>
			<a href="index.php" class="btn_logout">LOGOUT</a>
		</div>
		<div class="bagian_bawah">
			<div class="container">
				<h1><a href="index.php">Hai <?php echo $_SESSION['username']?> </a></h1>
				<ul>
					<li class="active"><a href="halaman_utama.php">Home</a></li>
					<li><a href="catatan_perjalanan.php">Catatan Perjalanan</a></li>
					<li><a href="isi_data.php">Isi Data</a></li>
				</ul>
			</div>
		</div>
		<div class="bagian_ngisorpisan">
			
		</div>
	</div>
</body>
</html>