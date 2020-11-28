<?php
//koneksi ke database
include 'koneksi.php';

//menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$performa = $_POST['performa'];


//update data ke database
mysqli_query($koneksi,"update karyawan set nama ='$nama', jk='$jk', alamat='$alamat', performa='$performa' where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>