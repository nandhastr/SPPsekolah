<?php
session_start();
if (!isset($_SESSION['login'])) {
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>WEB | SPP SEKOLAH</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    /* kombinasi warna utk web ini 
Kode Warna : #69d2e7, #a7dbd8, #e0e4cc, #f38630, #fa6900
*/


    body {
      background-color: #e0e4cc;
    }

    .nav-item {
      margin-right: 10px !important;

    }

    .nav {
      margin: 2px;
      font-size: 14px !important;
      background-color: #69d2e7 !important;
      box-shadow: 2px 9px 5px rgba(0, 0, 0, 0.5);
    }
  </style>
</head>


<body>

  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light nav text-light">
    <center>
      <h2><b>Aplikasi Pembayaran SPP</b></h2>
    </center>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dataadmin.php">DATA ADMIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datasiswa.php">DATA SISWA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dataguru.php">DATA GURU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datawali.php">DATA WALI KELAS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksi.php">TRANSAKSI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
      </ul>

    </div>
  </nav>