<?php 

require 'functions.php';



	if(isset($_POST["submit"])){
		// Melakukan Pengecekan Data
		if( tambah($_POST) > 0 ){
			echo "
				<script>
					alert('data baru berhasil ditambahkan');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('data baru gagal ditambahkan');
					document.location.href = 'index.php';
				</script>
			";
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Menambahkan Data Mahasiswa</title>

	<style type="text/css">
		ul{
			list-style-type: none;
		}
	</style>
</head>
<body>

	<h1>DAFTAR ANGGOTA KRAKEN TEAM SOFTBALL ITERA</h1>

	<form action="" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" id="nama" name="nama"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td>:</td>
				<td><input type="text" id="prodi" name="prodi"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" id="nim" name="nim"></td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td><input type="text" id="no_hp" name="no_hp"></td>
			</tr>
			<tr>
				<td>Angkatan</td>
				<td>:</td>
				<td><input type="text" id="angkatan" name="angkatan"></td>
			</tr>
		</table>
		<button type="submit" name="submit">Tambah Data</button>

	</form>

</body>
</html>	