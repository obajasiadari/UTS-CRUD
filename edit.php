<!DOCTYPE html>
<html>
<head>
	<title>UTS Pemograman Internet</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<center>
		<h1>Mengedit Data Karyawan<span class="badge badge-info">!</span></h1>
		<br/>
		<h3>EDIT DATA</h3>

		<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"select * from karyawan where id='$id'");
		while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki</td>
					<td><input type="radio" name="jk" value="Perempuan">Perempuan</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Performa</td>
					<td><input type="text" name="performa"value="<?php echo $d['performa']; ?>"></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"><input type="submit" value="KEMBALI"><a href="index.php"></a></td>
				</tr>
			</table>
		</form>
		<?php
		
	}
	?>
</body>
</html>