<?php  
	require 'functions.php';

	// ambil data di URL dngan menggunakan GET
	$ubah = $_GET["id"];

	// query data mahasiswa berdasarkan id-nya
	$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $ubah")[0];

	// cek apakah button sudah diklik atau belum
	if ( isset($_POST["submit"])) {
		// pesan konfirmasi 
		// berhasil
		if (ubah($_POST) > 0) {
			echo "
				<script>
					alert('Data berhasil diubah!');
					document.location.href = 'index2.php';
				</script>
			";
		} else {
			echo "
				<script>
					alert('Data gagal diubah!');
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
	<title>Ubah Data Mahasiswa</title>		
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<input type="hidden" name="id" value="<?php echo $mahasiswa["id"]; ?>">
			<li>
				<label for="nama">Nama: </label>
				<input type="text" name="nama" id="nama" value="<?php echo $mahasiswa["nama"]; ?>" required="must be field">
			</li>	

			<li>
				<label for="nim">nim: </label>
				<input type="text" name="nim" id="nim" value="<?php echo $mahasiswa["nim"]; ?>" required="must be field">
			</li>

			<li>
				<label for="jurusan">jurusan: </label>
				<input type="text" name="jurusan" id="jurusan" value="<?php echo $mahasiswa["jurusan"]; ?>" required="must be field">
			</li>

			<li>
				<label for="email">email: </label>
				<input type="email" name="email" id="email" value="<?php echo $mahasiswa["email"]; ?>" required="must be field">
			</li>

			<li>
				<label for="gambar">gambar: </label>
				<input type="text" name="gambar" id="gambar" value="<?php echo $mahasiswa["gambar"]; ?>" required="must be field">
			</li>

			<li>
				<button type="submit" name="submit">ubah data</button>
			</li>	
		</ul>
	</form>
</body>
</html>