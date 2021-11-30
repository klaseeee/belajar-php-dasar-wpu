<?php  
	require "functions.php";

	// ambil data dari table mahasiswa / query
	$mahasiswa = query("SELECT * FROM mahasiswa");

	// tombol cari ditekan
	if (isset($_POST["cari"])) {
		$mahasiswa = cari($_POST["keyword"]);
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah mahasiswa</a>

	<br><br>

	<form action="" method="post">
		<input type="text" name="keyword" placeholder="cari data...." size="30px" autofocus autocomplete="off">
		<button type="submit" name="cari">cari</button>
	</form>

	<br>

	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Email</th>
			<th>Jurusan</th>
			<th>Gambar</th>
		</tr>
		
		<?php $i = 1 ?>
		<?php foreach ($mahasiswa as $row) : ?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td>
					<a href="ubah.php?id=<?php echo $row["id"];?>">edit</a> |
					<a href="hapus.php?id=<?php echo $row["id"];?>" onclick = "return confirm('yakin ingin menghapus?');">delete</a>
				</td>
				<td> <?php echo $row["nama"]; ?> </td>
				<td> <?php echo $row["nim"]; ?> </td>
				<td> <?php echo $row["email"]; ?> </td>
				<td> <?php echo $row["jurusan"]; ?> </td>
				<td> <img src="img/<?php echo $row['gambar']; ?>" alt="gambar" width="100px;"> </td>
			</tr>			
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
</body>
</html>