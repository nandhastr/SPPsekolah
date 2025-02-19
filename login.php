<?php

session_start();
if (isset($_SESSION['login'])) {
	header('Location: index.php');
}
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = trim($_POST['username']);
	$pass = trim($_POST['password']);

	if ($user == "" || $pass == "") {
		echo "Username atau password kosong!";
	} else {
		$data = $konek->query("SELECT * FROM admin WHERE username = '$user'");
		$dta = mysqli_fetch_assoc($data);

		if ($dta) {
			echo "Password di Database: " . $dta['password'] . "<br>";

			if (password_verify($pass, $dta['password'])) {
				echo "✅ Password cocok!";
				$_SESSION['login'] = TRUE;
				$_SESSION['username'] = $dta['username'];
				$_SESSION['id'] = $dta['idadmin'];
				header('Location: index.php');
				exit();
			} else {
				echo "❌ Password tidak cocok!";
			}
		} else {
			echo "❌ Username tidak ditemukan!";
		}
	}
}


?>

<head style="background-color:#00FFFF ;">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../favicon.ico">

	<title>HALAMAN LOGIN</title>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<style>
		.col-md-4col-md-offset-4 {
			margin-top: 20px;
		}

		body {
			background-image: url(img/skolah.png);

		}

		.kotak {
			box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.8);

		}
	</style>


</head>
</head>

<body>


	<div class="container  ">
		<div class="col-md-4 col-md-offset-4 kotak2">
			<div class="panel panel-info kotak">
				<div class="panel-heading ">
					<center>
						<img src="" alt="" class="img">
						<h2 style="font-style:Bold ;">MENU LOGIN</h2>
						<h3>Aplikasi Pembayaran SPP</h3>
						<?php if (isset($error)) :  ?>
							<div class="alert alert-warning">
								<span><b>Peringatan!!</b>Form Belum Lengkap</span>
							</div>
						<?php endif;  ?>
					</center>

				</div>
				<div class="panel-body">

					<form action="" method="post">
						<table class="table">
							<tr>
								<td>Username</td>
								<td>:</td>
								<td>
									<input class="form-control" type="text" name="username" placeholder="Masukan Username" autofocus>
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td>
									<input class="form-control" type="Password" name="password" placeholder="password">
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td>
									<button class="btn btn-success" name="login">LOGIN</button>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>


	<?php include 'footer.php';  ?>