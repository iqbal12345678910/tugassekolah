<?php 
// menghubungkan koneksi
include '../koneksi.php';
// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
// update data
mysqli_query($koneksi,"update pelanggan set pelanggan_nama='$nama', 
pelanggan_hp='$hp', pelanggan_alamat='$alamat', pelanggan_jenis_kelamin='$jenis_kelamin'where pelanggan_id='$id'");
// mengalihkan halaman kembali ke halaman pelanggan
header("location:pelanggan.php");
?>