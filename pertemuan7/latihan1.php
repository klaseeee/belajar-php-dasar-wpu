<!-- <?php  
// SUPERGLOBALS
// variable global milik php
// merupakan array assosiative

// $_GET
// var_dump($_GET);
?> -->

<?php  
	$mahasiswa = [
		[	"Nama" => "Muklas Nur Ardiansyah",
			"NIM" => "1710618056",
			"Prodi" =>"Pendidikan Ekonomi", 
			"Email" => "muklasn20@gmail.com",
			"gambar" => "gatau.png"
		], 
		[
			"Nama" => "Ardiansyah",
			"NIM" => "1710618056",
			"Prodi" =>"Pendidikan Ekonomi", 
			"Email" => "muklasn20@gmail.com",
			"gambar" => "gatau.png"
		]
	];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GET</title>
</head>
<body>
	<h3>Daftar Mahasiswa</h3>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li>Nama: <?= $mhs["Nama"]; ?></li>
			<li>NIM: <?= $mhs["NIM"]; ?></li>
			<li>Prodi: <?= $mhs["Prodi"]; ?></li>
			<li>Email: <?= $mhs["Email"]; ?></li>
			<li><?= $mhs["gambar"]; ?></li>
		</ul>
	<?php endforeach; ?>
</body>
</html>			