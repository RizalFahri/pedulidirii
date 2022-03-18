<?php 
session_start();
$user = $_SESSION['username'];
$datauser = "catatan/$user.txt";

if (!file_exists($datauser)) {
	die('<center>Kamu Belum Mempunyai Catatan!</center>');
}else{
	$file=fopen($datauser, "r");
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
				<div class="txt_judul"><p>APLIKASI PEDULI DIRI</p></div>
				<div class="txt_subjudul"><p>Aplikasi ini dibuat oleh Rizal Fahri Irawan Kelas 12 RPL 1</p></div>
			</div>
			<a href="index.php" class="btn_logout">LOGOUT</a>
		</div>
		<div class="bagian_bawah">
			<div class="container">
				<h1><a href="index.php">Hai <?php echo $_SESSION['username']?> </a></h1>
				<ul>
					<li><a href="halaman_utama.php">Home</a></li>
					<li class="active"><a href="catatan_perjalanan.php">Catatan Perjalanan</a></li>
					<li><a href="isi_data.php">Isi Data</a></li>
				</ul>
			</div>
			<div class="bagian_ngisorpisan" align="center">
				<table border="1" align="center" width="50%">
					<td>
						<a>Urut Berdasarkan</a>
						<select id="urut" onclick="urutkan(this)">
							<option value="0">Tanggal</option>
							<option value="1">Waktu</option>
							<option value="2">Lokasi</option>
							<option value="3">Suhu</option>
						</select>
						<input type="submit" value="urutkan">
					</td>
				</table>
				<br>
<!-- 				<table border="1" align="center" width="50%" height="40%"> -->
					<td>
						<table align="center" border="1" width="80%" id="myTable">
							<tr>
								<th>Tanggal</th>
								<th>Waktu</th>
								<th>Lokasi Yang Dikunjungi</th>
								<th>Suhu Tubuh</th>
							</tr>
							<?php
							while (($row = fgets ($file)) !=false) {
								$col = explode(',', $row);
								foreach ($col as $data){
								echo "<td>" . trim($data) ."</td>";
							}
						}
							?>
						</table>
						<script src="main.js"></script>
					</td>
<!-- 				</table> -->
			</div><!-- ngisorpisan -->
		</div><!-- bagianbawah -->
	</div><!-- bungkus -->
</body>
</html>