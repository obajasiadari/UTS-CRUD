<?php
//konektor database
include 'koneksi.php';

//menangkapdata yang di kirim dari form
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$performa = $_POST['performa'];

//menginput data ke database
mysqli_query($koneksi,"insert into karyawan values('','$nama','$jk','$alamat','$performa')");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>