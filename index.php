<?php 
if (isset($_POST['daftar']))
{
	$nik = $_POST['nik'];  
	$namalengkap = $_POST['namalengkap'];
	$text = $nik . "," . $namalengkap . "\n";
	$fp = fopen('config.txt', 'a+');

	if (fwrite($fp, $text)) {
		echo '<script>alert("Akun Anda Berhasil Ditambahkan YGY!");</script>';
	}
}
elseif (isset($_POST['masuk'])) 
{
	$data = file_get_contents("config.txt");
	$contents = explode("\n", $data);

	foreach ($contents as $values) {
		$login = explode(",", $values);
		$nik = $login[0];
		$namalengkap = $login[1];

		if ($nik == $_POST['nik'] && $namalengkap == $_POST['namalengkap']) {
			session_start();
			$_SESSION['username'] = $namalengkap;
			header('location: halaman_utama.php');
		}else {
			echo '<script>alert("NIK atau Nama Lengkap yang Anda Masukan salah!");</script>';
		}
	}
}
 ?>

<!DOCTYPE html>
<htmXl>
<head>
	<title>MASUK|DAFTAR</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="pembungkus">
		<div class="text">
			<p class="t1">APLIKASI PEDULI DIRI</p>
			<p class="t2">Silahkan isi NIK dan Nama Lengkap Anda !</p>
		</div>
		<form action="" method="POST">
			<div class="txt_field">
				<input type="text" required name="nik">
				<span></span>
				<label>NIK</label>
			</div>
			<div class="txt_field">
				<input type="text" required name="namalengkap">
				<span></span>
				<label>Nama Lengkap</label>
			</div>
			<div class="bawah">
				<input type="submit" value="Saya Pengguna Baru" name="daftar">
				<input type="submit" value="Masuk" name="masuk">
			</div>
		</form>
	</div>
</body>
</html>