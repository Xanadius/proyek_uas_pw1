<?php
session_start();
if (empty($_sesi['username'])) {
  header('location:../index.php');
} else {
  include "../conn.php";

  $a = "Belum";
  $b = $_GET['total'];
  $c = date("Y-m-d H:i:s");
  $d = "Cash On Delivery (COD)";
  //$no_po = date("dmYHis");
  $query1 = mysqli_query($koneksi, "INSERT INTO konfirmasi (no_po, kd_cus, bayar_via, tanggal, jumlah, bukti_transfer, status) VALUES ('$_sesi[user_id]', '$_sesi[user_id]', '$d', '$c', '$b', 0, '$a')") or die(mysqli_error($koneksi));

  $input = mysqli_query($koneksi, "INSERT INTO po_terima(no_po, kd_cus, kode, tanggal, qty, total) SELECT sesi, sesi, kode, tanggal, qty, jumlah FROM cart WHERE sesi='$_sesi[user_id]'") or die(mysqli_error($koneksi));


  if ($query1 and $input) {
    $delete = mysqli_query($koneksi, "DELETE FROM cart WHERE sesi='$_sesi[user_id]'");
    echo "<script>alert('Checkout Sukses, silahkan cetak invoice dan lakukan pembayaran..'); window.location = 'index1.php'</script>";
  } else {
    echo "<script>alert('Checkout Gagal !'); window.location = 'index.php'</script>";
  }
}
