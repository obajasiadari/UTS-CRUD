<?php 
$koneksi = mysqli_connect("localhost","root","","kar_hansung");

// ngecek koneksi
if(mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>