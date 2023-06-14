<?php include 'header.php'; ?>


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

mysqli_close($konek);

?>