<?php  
	require 'functions.php';

	// cek apakah button sudah diklik atau belum
	if ( isset($_POST["submit"])) {
		// pesan konfirmasi 
		// berhasil
		if (tambah($_POST) > 0) {
			echo "
				<script>
					alert('Data berhasil ditambahkan!');
					document.location.href = 'index2.php';
				</script>
			";
		} else {
			echo "
				<script>
					alert('Data gagal ditambahkan!');
					document.location.href = 'index2.php';
				</script>
			";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Mahasiswa</title>		
</head>
<body>
	<h1>Tambah Mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" id="nama" required>
			</li>	

			<li>
				<label for="nim">nim: </label>
				<input type="text" name="nim" id="nim">
			</li>

			<li>
				<label for="jurusan">jurusan: </label>
				<input type="text" name="jurusan" id="jurusan">
			</li>

			<li>
				<label for="email">email: </label>
				<input type="text" name="email" id="email">
			</li>

			<li>
				<label for="gambar">gambar: </label>
				<input type="text" name="gambar" id="gambar">
			</li>

			<li>
				<button type="submit" name="submit">tambah data</button>
			</li>	
		</ul>
		
	</form>
</body>
</html>