<?php  
	// $mahasiswa = [
	// 	["Muklas Nur Ardiansyah", 1701618056, "Pendidikan Ekonomi", "muklasn20@gmail.com"],
	// 	["Ardiansyah", 1701618056, "Pendidikan Ekonomi", "muklasn20@gmail.com"],
	// ];

	// array assosiative
	// definisinya sama dengan array numerik, namun perbedaannya array ini indeksnya kita sendiri yang menentukan
	// atau key-nya kita sendiri yang menentukan
	
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
	<title>Latihan Array</title>
	<style>
		.container {
			width: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		h3 {
			margin: auto;
		}

		ul {
			/*display: flex;*/
			margin: auto;
		}

		ul li {
			list-style-type: none;
			/*border: 1px solid black;*/ 
			margin: auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3>Daftar Mahasiswa</h3>
		<?php foreach ($mahasiswa as $mhs) :?>
			<ul>
				<li><img src="img/<?= $mhs["gambar"]; ?>"></li>
				<li>Nama: <?php echo $mhs["Nama"]; ?></li>
				<li>NIM: <?php echo $mhs["NIM"]; ?></li> 
				<li>Prodi: <?php echo $mhs["Prodi"]; ?></li>
				<li>Email: <?php echo $mhs["Email"]; ?> </li>
			</ul>
		<?php endforeach; ?>
	</div>
</body>
</html>
