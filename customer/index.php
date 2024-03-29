<?php
session_start();
if (empty($_SESSION['username'])) {
	header('location:../index.php');
} else {
	include "../conn.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>

<body>

	<?php include "header.php"; ?>

	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Arabia Gayo</h2>
				<p>Biji kopi pilihan dari Aceh dengan aroma yang sangat tajam dan tidak meninggalkan aftertaste yang pahit. </p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="./admin/gambar_produk/Arabica_Gayo.jpeg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Robuta Lampung</h2>
				<p>Biji Kopi Robusta dengan tekstur yang halus dan rasa yang kuat.</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="./admin/gambar_produk/Robusta_Lampung.jpeg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image03" /></div>

			</div>
			<div class="da-slide">
				<h2>Kintamani Bali</h2>
				<p>Biji Kopi dengan rasanya yang segar asam ( citrus ) seperti jeruk. Aromanya yang eksotis, teksturnya yang ringan, membuat kopi ini tidak terlalu pahit dan tidak meninggalkan aftertaste yang kental setelahnya.</p>
				<a href="produk.php" class="da-link">Lihat Produk</a>
				<div class="da-img"><img src="./admin/gambar_produk/Kintamani_Bali.jpeg" style="border: 3px solid whitesmoke; border-radius: 10px;" alt="image02" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>

	</div>
	<!-- end: Slider -->

	<!--start: Wrapper-->
	<div id="wrapper">

		<!--start: Container -->
		<div class="container">

			<!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
			<div class="hero-unit">
				<p>
					Selamat datang di Artisan Aroma Beans - Tempatnya Kopi Premium Berkualitas Tinggi!
				</p>
				<p><a class="btn btn-success btn-large" href="profil.php">Tentang Kami &raquo;</a></p>

			</div>

			<!-- end: Hero Unit -->

			<!-- start: Row -->

			<div class="row">
				<?php
				$sql = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY kode DESC limit 9");
				while ($data = mysqli_fetch_array($sql)) {
				?>
					<div class="span4">
						<div class="icons-box">
							<div class="title">
								<h3><?php echo $data['nama']; ?></h3>
							</div>
							<img src="../admin/<?php echo $data['gambar']; ?>" style="border: 2px solid grey; border-radius: 5px; width: 250px; height: 200px;" />
							<div>
								<h3>Rp.<?php echo number_format($data['harga'], 2, ",", "."); ?></h3>
							</div>
							<!--	<p>
						
						</p> -->
							<div class="clear"><a href="detailproduk.php?kd=<?php echo $data['kode']; ?>" class="btn btn-lg btn-danger">Details</a> <a href="addtocart.php?kd=<?php echo $data['kode']; ?>" class="btn btn-lg btn-success">Buy &raquo;</a></div>

						</div>
					</div>
				<?php
				}


				?>
				<!---->
			</div>

			<hr>

			<!-- start: Row -->
			<div class="row">

				<!-- start: Icon Boxes -->
				<div class="icons-box-vert-container">

					<!-- start: Icon Boxes -->
					<div class="icons-box-vert-container">

						<!-- start: Icon Box Start -->
						<div class="span6">
							<div class="icons-box-vert">
								<i class="ico-ok ico-color circle-color big"></i>
								<div class="icons-box-vert-info">
									<h3>Visi :</h3>
									<p>Artisan Aroma Beans ingin menjadi destinasi kopi premium yang diakui secara internasional, memadukan keahlian seni panggang kopi artisanal dengan pengalaman pelanggan yang tak terlupakan.</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<!-- end: Icon Box-->

						<!-- start: Icon Box Start -->
						<div class="span6">
							<div class="icons-box-vert">
								<i class="ico-cup  ico-white circle-color-full big-color"></i>
								<div class="icons-box-vert-info">
									<h3>Misi :</h3>
									<p>
										Artisan Aroma Beans menyediakan biji kopi berkualitas tinggi dari berbagai origina, dipilih dengan teliti untuk memberikan pengalaman rasa yang unik. Kami juga ingin menciptakan suasana kafe yang hangat dan nyaman, memadukan desain modern dengan sentuhan artisanal.</li>
									</p>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<!-- end: Icon Box -->

					</div>
					<!-- end: Icon Boxes -->
					<div class="clear"></div>
				</div>
				<!-- end: Row -->

				<hr>

			</div>
			<!--end: Container-->

		</div>
		<!-- end: Wrapper  -->

		<!-- start: Footer Menu -->
		<div id="footer-menu" class="hidden-tablet hidden-phone">

			<!-- start: Container -->
			<div class="container">

				<!-- start: Row -->
				<div class="row">

					<!-- start: Footer Menu Logo -->
					<div class="span2">
						<div id="footer-menu-logo">
							<a href="#"><img src="../img/logo.png" alt="logo" /></a>
						</div>
					</div>
					<!-- end: Footer Menu Logo -->

					<!-- start: Footer Menu Links-->
					<div class="span9">

						<div id="footer-menu-links">

							<ul id="footer-nav">

								<li><a href="#">Free Delivery Max 5 KM</a></li>

								<li><a href="#">Cash On Delivery (COD)</a></li>

								<li><a href="#">Pelayanan Cepat</a></li>

							</ul>

						</div>

					</div>
					<!-- end: Footer Menu Links-->

					<!-- start: Footer Menu Back To Top -->
					<div class="span1">

						<div id="footer-menu-back-to-top">
							<a href="#"></a>
						</div>

					</div>
					<!-- end: Footer Menu Back To Top -->

				</div>
				<!-- end: Row -->

			</div>
			<!-- end: Container  -->

		</div>
		<!-- end: Footer Menu -->
		<?php include "footer.php"; ?>
		<!-- start: Java Script -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="../js/jquery-1.8.2.js"></script>
		<script src="../js/bootstrap.js"></script>
		<script src="../js/flexslider.js"></script>
		<script src="../js/carousel.js"></script>
		<script src="../js/jquery.cslider.js"></script>
		<script src="../js/slider.js"></script>
		<script defer="defer" src="../js/custom.js"></script>
		<!-- end: Java Script -->

</body>

</html>