<?php include 'header.php'; ?>
<div class="container">
	<center>
		<div class="panel-body">
			<h1 style="
			font-family: rockwell;
			margin-top: 20px;
			margin-bottom: 50px;
			 text-shadow: 1px 5px 5px rgba(0, 0, 0, 5);
			color: #44749d;
			font-size: 35px;
			"><b>SELAMAT DATANG DI HALAMAN UTAMA WEB SPP</b></h1>

		</div>
	</center>


	<?php include 'koneksi.php'; ?>
	<!-- memeriksa koneksi -->
	<?php if (mysqli_connect_errno()) {
		echo "koneksi gagal : " . mysqli_connect_error();
		exit();
	}
	?>
	<?php
	$query = "SELECT COUNT(*) AS jumlah_siswa From siswa";
	$result = mysqli_query($konek, $query);
	$row = mysqli_fetch_assoc($result);
	$jumlahsiswa = $row['jumlah_siswa'];
	?>

	<?php
	$query = "SELECT COUNT(*) AS jumlah_guru From guru";
	$result = mysqli_query($konek, $query);
	$row = mysqli_fetch_assoc($result);
	$jumlahguru = $row['jumlah_guru'];
	?>
	<?php
	$query = "SELECT COUNT(*) AS jumlah_wali From walikelas";
	$result = mysqli_query($konek, $query);
	$row = mysqli_fetch_assoc($result);
	$jumlahwali = $row['jumlah_wali'];
	?>
	<?php
	$query = "SELECT COUNT(*) AS jumlah_admin From admin";
	$result = mysqli_query($konek, $query);
	$row = mysqli_fetch_assoc($result);
	$jumlahadmin = $row['jumlah_admin'];
	?>

	<!-- Content Wrapper. Contains page content -->
	<center>
		<!-- <div class="content-wrapper"> -->
		<!-- Main content -->
		<!-- <section class="content">
				<div class="container-fluid"> -->
		<!-- Small boxes (Stat box) -->
		<section>
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info" style="box-shadow: 2px 7px 10px rgba(0,0,0,0.7);">
						<div class="inner">
							<h3><?php echo $jumlahsiswa; ?></h3>
						</div>
						<p><b>Siswa</b></p>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="datasiswa.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success" style="box-shadow: 2px 7px 10px rgba(0,0,0,0.7);">
						<div class="inner">
							<h3><?php echo $jumlahguru; ?></h3>

							<p><b>Guru</b></p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="dataguru.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning" style="box-shadow: 2px 7px 10px rgba(0,0,0,0.7);">
						<div class="inner">
							<h3><?php echo $jumlahwali; ?></h3>

							<p><b>Wali Kelas</b></p>
						</div>
						<div class="icon">
							<i class="ion ion-person-add"></i>
						</div>
						<a href="datawali.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger" style="box-shadow: 2px 7px 10px rgba(0,0,0,0.7);">
						<div class="inner">
							<h3><?php echo $jumlahadmin; ?></h3>
							<p><b>Admin</b></p>
						</div>
						<div class="icon">
							<i class="ion ion-pie-graph"></i>
						</div>
						<a href="dataadmin.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>
			<!-- /.row -->
			<!-- Main row -->
			<!-- /.row (main row) -->
		</section>
		<!-- /.content -->

</div>
<!--slider -->
<div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<center>
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="jumbotron jumbotron-fluid" style="box-shadow: 5px 7px 5px rgba(0,0,0,0.5); background-color:  #69d2e7">
						<div class="container">
							<h1 class="display-4"><b>Bayar SPP kini mudah dan praktis</b></h1>
							<p class="lead">tanpa harus pergi ke kantor sekolah, lakukan pembayaran sambil duduk dirumah</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="jumbotron jumbotron-fluid" style="box-shadow: 5px 7px 5px rgba(0,0,0,0.5); background-color: #f38630;">
						<div class=" container">
							<h1 class="display-4"><b>Tidak perlu khawatir</b></h1>
							<p class="lead">Sistem kami aman untuk pembayaran, dan akan kami pastikan pembayaran anda masuk ke sistem kami</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="jumbotron jumbotron-fluid" style="box-shadow: 5px 7px 5px rgba(0,0,0,0.5); background-color: #a7dbd8;">
						<div class="container">
							<h1 class="display-4"><b>Segera Bayar SPP agar belajar anda nyaman dan tentram</b></h1>
							<p class="lead">buatlah kenyamanan belajar anda dengan memulai sesuatu dari anda sendiri</p>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</center>
	</div>
</div>


</center>


<script src="script.js"></script>

<?php include 'footer.php'; ?>