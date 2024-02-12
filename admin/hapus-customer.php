<?php
include "../conn.php";
$kd = $_GET['kd_cus'];

$query = mysqli_query($koneksi, "DELETE FROM customer WHERE kd_cus='$kd'");
if ($query) {
  echo "<script>alert('Data Berhasil dihapus!'); window.location = 'customer.php'</script>";
} else {
  echo "<script>alert('Data Gagal dihapus!'); window.location = 'customer.php'</script>";
}
