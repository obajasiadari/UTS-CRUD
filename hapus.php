<?php
//koneksi ke database
include 'koneksi.php';

//menangkap data id yang dikirim dari url
$id = $_GET['id'];


//menghapus data dari database
mysqli_query($koneksi,"delete from karyawan where id='$id'");

//mengalohkan pada halaman index
header("location:index.php");

?>