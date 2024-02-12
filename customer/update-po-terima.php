<?php
include "../conn.php";
if (isset($_POST['update'])) {
	$id	     = $_POST['id'];
	$no_po	 = $_POST['no_po'];
	$kd_cus	 = $_POST['kd_cus'];
	$kode	 = $_POST['kode'];
	$tanggal = $_POST['tanggal'];
	$berat    = $_POST['berat'];
	$qty     = $_POST['qty'];
	$total   = $_POST['total'];

	$update = mysqli_query($koneksi, "UPDATE po_terima SET no_po='$no_po', kd_cus='$kd_cus', kode='$kode', tanggal='$tanggal', berat='$berat', qty='$qty', total='$total' WHERE id='$id'") or die(mysqli_error($koneksi));
	if ($update) {
		echo "<script>alert('Data Po Terima berhasil diupdate!'); window.location = 'index.php'</script>";
	} else {
		echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
	}
}
