<?php
$namafolder = "gambar_admin/"; //tempat menyimpan file

include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"])) {
	$jenis_gambar = $_FILES['nama_file']['type'];
	$user_id = $_POST['user_id'];
	$username = $_POST['username'];
	$password1 = $_POST['pw'];
	$password = sha1($password1);
	$fullname = $_POST['fullname'];

	if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/x-png") {
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql = "INSERT INTO user(user_id, username, pw, fullname, gambar) VALUES ('$user_id','$username','$password','$fullname','$gambar')";
			$res = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
			echo "Gambar berhasil dikirim ke direktori" . $gambar;
			echo "<h3><a href='input-admin.php'> Input Lagi</a></h3>";
		} else {
			echo "<p>Gambar gagal dikirim</p>";
		}
	} else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
	}
} else {
	echo "Anda belum memilih gambar";
}
