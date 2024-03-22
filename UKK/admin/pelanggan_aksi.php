<?php 
// menghubungkan dengan koneksi
include '../koneksi.php';
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
// input data ke tabel pelanggan
mysqli_query($koneksi,"insert into pelanggan 
values('','$nama','$hp','$alamat','$jenis_kelamin')");
header("location:pelanggan.php");
?>