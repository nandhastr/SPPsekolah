<?php include 'header.php'; ?>
<div class="container">
	<center>
		<div class="panel-body">
			<h2 style="margin-top: 100px;
			margin-bottom: 50px;
			 text-shadow: 3px 7px 9px rgba(0, 0, 0, 0.8);
			 color: black;
			
			"><b>SELAMAT DATANG DI HALAMAN UTAMA WEB SPP</b></h2>

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
					<div class="small-box bg-info">
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
					<div class="small-box bg-success">
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
					<div class="small-box bg-warning">
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
					<div class="small-box bg-danger">
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

</center>
</div>
<script src="script.js"></script>

<?php include 'footer.php'; ?>