<?php  
	// koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "phpdasar");

	// ambil data dari table mahasiswa / query
	$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
	// var_dump($result);

	// cek database apakah ada atau tidak
		// if ( !$result ) {
		// 	echo mysqli_error($conn);
		// }

	// ambil data (fetch) mahasiswa dari object result
	// mysqli_fetch_row() //mengembalikan array numeric
	// mysqli_fetch_assoc() //mengembalikan array assosiative
	// mysqli_fetch_array() //dapat mengembalikan array numeric dan array assosiative
	// mysqli_fetch_object()

	// mysqli_fetch_row()
		// $mhs = mysqli_fetch_row($result); 
		// var_dump($mhs[3]);

	// mysqli_fetch_assoc()
		// while ($mhs = mysqli_fetch_assoc($result)) {
		// 	var_dump($mhs["nama"]);	
		// } 

	// mysqli_fetch_array()
		// $mhs = mysqli_fetch_array($result); /
		// var_dump($mhs["jurusan"]);
		// var_dump($mhs[3]);
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
		<?php while($row = mysqli_fetch_assoc($result)) : ?>
			<tr>
				<td> <?php echo $i; ?> </td>
				<td>
					<a href="">edit</a> |
					<a href="">delete</a>
				</td>
				<td> <?php echo $row["nama"]; ?> </td>
				<td> <?php echo $row["nim"]; ?> </td>
				<td> <?php echo $row["email"]; ?> </td>
				<td> <?php echo $row["jurusan"] ?> </td>
				<td><img src="img/11.png" alt="gambar" width="100px;"></td>
			</tr>			
		<?php $i++; ?>
		<?php endwhile; ?>
	</table>
</body>
</html>