<?php require_once("conn.php");
if (!isset($_SESSION)) {
	session_start();
} ?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>

<body>

	<?php include "header.php"; ?>

	<!-- start: Slider -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>Profil</h2>

			</div>
			<!-- end: Container  -->

		</div>

	</div>
	<!-- end: Slider -->

	<!--start: Wrapper-->
	<div id="wrapper">

		<!--start: Container -->
		<div class="container">

			<!-- start: Hero Unit - Main herounit for a primary marketing message or call to action -->

			<blockquote style="font-size: medium;">
				<b>Profil Kami : </b>
				<br />
				<b>Artisan Aroma Beans </b> adalah kafe yang didedikasikan untuk menghadirkan kualitas kopi terbaik kepada pelanggan kami. Kami memahami bahwa biji kopi berkualitas tinggi adalah kunci utama dalam menyajikan secangkir kopi yang luar biasa. Oleh karena itu, kami bekerja sama dengan para petani kopi terbaik di seluruh dunia untuk mendapatkan biji kopi pilihan yang dipanggang dengan keahlian artisanal. <br />

			</blockquote>

			<hr>

			<!-- start: Row -->
			<div class="row">

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
						<a href="#"><img src="../img/logo3.png" alt="logo" /></a>
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
	<script defer="defer" src="js/custom.js"></script>
	<!-- end: Java Script -->

</body>

</html>