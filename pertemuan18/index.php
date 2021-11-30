<?php  
	session_start();

	// cek sudah login atau belum
	if (!isset($_SESSION["login"])) {
		header("Location: login.php");
		exit;
	}

	require "functions.php";

	// pagination
	// konfigurasi
	$jumlahDataPerHalaman = 2;

	// cara pertama untuk menghitung jumlah mahasiswa di database
		// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
		// $jumlahDataMahasiswa = mysqli_num_rows($result);
		// var_dump($baris); die;
	
	// cara kedua
	$jumlahDataMahasiswa = count(query("SELECT * FROM mahasiswa"));
	$jumlahHalaman = ceil($jumlahDataMahasiswa / $jumlahDataPerHalaman);

	// cek apakah ada url halaman yang aktif
	// if(isset($_GET["halaman"])) {
	// 	$halamanAktif = $_GET["halaman"];
	// } else {
	// 	$halamanAktif = 1;
	// }

	$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
	
	// cek setiap halaman mau dimulai dari indeks berapa
	// halaman = 2, awalData = 2
	// halaman = 3, awalData = 4

	$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


	// ambil data dari table mahasiswa / query
	$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

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
	<!-- log out -->
	<a href="logout.php">Log Out</a>

	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah mahasiswa</a>

	<br><br>

	<!-- find data -->
	<form action="" method="post">
		<input type="text" name="keyword" placeholder="cari data...." size="30px" autofocus autocomplete="off">
		<button type="submit" name="cari">cari</button>
	</form>

	<br>

	<!-- previos -->
	<?php if($halamanAktif > 1) : ?>
		<a href="index.php?halaman=<?php echo $halamanAktif - 1 ?>">&laquo</a>
	<?php endif; ?>

	<!-- link halaman -->
	<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
		<?php if($i == $halamanAktif) : ?>
			<a href="index.php?halaman=<?php echo $i; ?>" style="font-weight: bold; color: red; "> <?php echo $i; ?> </a>
		<?php else : ?>
			<a href="index.php?halaman=<?php echo $i; ?>"> <?php echo $i; ?> </a>
		<?php endif; ?>
	<?php endfor; ?>

	<!-- continous -->
	<?php if($halamanAktif < $jumlahHalaman) : ?>
		<a href="index.php?halaman=<?php echo $halamanAktif + 1 ?>">&raquo</a>
	<?php endif; ?>

	<!-- table mahasiswa -->
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