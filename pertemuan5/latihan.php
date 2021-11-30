<?php  
	$mahasiswa = [
		["Muklas Nur Ardiansyah", 1701618056, "Pendidikan Ekonomi", "muklasn20@gmail.com"], 
		["Muklas Nur Ardiansyah", 1701618056, "Pendidikan Ekonomi", "muklasn20@gmail.com"]
	];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Mahasiswa</title>
	<style>
		ul {
			list-style-type: none;
		}
		ul li {
			margin: 5px 0;
		}
	</style>
</head>
<body>
	<h3>Daftar Mahasiswa</h3>
	<?php foreach ($mahasiswa as $mhs) : ?>
		<ul>
			<li>Nama :<?= "$mhs[0]"; ?></li>
			<li>NIM :<?= "$mhs[1]"; ?></li>
			<li>Prodi :<?= "$mhs[2]"; ?></li>
			<li>Email :<?= "$mhs[3]"; ?></li>
		</ul>
	<?php endforeach; ?>
	
</body>
</html>