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
		<div class="jumbotron">
		  <h1 class="display-4">Data Profile Karyawan PT Hansung</h1>
		  <p class="lead">Data-data yang bertujuan untuk memereksi kemampuan dan perkembangan setiap anggota perusahaan</p>
		  <hr class="my-4">
		  <p>Setiap Karyawan wajib mengisi data dengan mengklik "Tambah Data" dibawah</p>
		  <a class="btn btn-primary btn-lg" href="tambah.php" role="button">Tambah Data</a>
			<blockquote class="blockquote text-right">
			  <footer class="blockquote-footer">Dibuat Oleh : <cite title="Source Title">Obaja Christison Siadari</cite></footer>
			  <footer class="blockquote-footer">NIM: <cite title="Source Title">19510040</cite></footer>
			</blockquote>
		</div>
		<h1>Data-data Karyawan<span class="badge badge-warning">1</span></h1>
		<br/>
		<table class="table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">ID</th>
		      <th scope="col">Nama Karyawan</th>
		      <th scope="col">Jenis Kelamin</th>
		      <th scope="col">Alamat</th>
		      <th scope="col">Performa</th>
		      <th scope="col">OPSI</th>
		    </tr>
		  </thead>
		  <tbody>
		   	<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"select * from karyawan");
			while($d = mysqli_fetch_array($data)){
				?>	
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['jk'];?></td>
					<td><?php echo $d['alamat'];?></td>
					<td><?php echo $d['performa'];?></td>
					<td>
						<a href="edit.php?id=<?php echo $d['id']; ?>" ><button type="button" class="btn btn-success">EDIT</button></a>
						<a href="hapus.php?id=<?php echo $d['id']; ?>"><button type="button" class="btn btn-danger">HAPUS</button></a>
					</td>
				</tr>
				<?php
			}
			?>
		  </tbody>
		</table>


		<br><br><br>
</body>
</html>