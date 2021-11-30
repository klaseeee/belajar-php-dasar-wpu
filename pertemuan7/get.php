<!-- SUPERGLOBALS -->
<!-- variable global milik php -->
<!-- merupakan array assosiative -->

<?php  
	// $x = 10;

	// function tampilAngka () {
	// 	global $x;
	// 	echo $x;
	// }

	// tampilAngka();
?>

<!-- variabel superglobals -->
<!-- merupakan array assosiative -->
<!-- $_GET -->
<!-- $_POST -->
<!-- $_REQUEST -->
<!-- $_SESSION -->
<!-- $_COOKIE -->
<!-- $_SERVER -->
<!-- $_ENV -->

<!-- $_GET -->
<?php  
	$mahasiswa = [
		[	"Nama" => "Muklas Nur Ardiansyah",
			"NIM" => "1710618056",
			"Prodi" =>"Pendidikan Ekonomi", 
			"Email" => "muklasn20@gmail.com",
			"gambar" => "11.png"
		], 
		[
			"Nama" => "klaseeee",
			"NIM" => "1710618056",
			"Prodi" =>"Pendidikan Akuntansi", 
			"Email" => "muklasardi9@gmail.com",
			"gambar" => "12.png"
		]
	];
?>

<?php foreach($mahasiswa as $mhs) : ?>
	<ul>
		<li>
			<a href="get2.php?nama=<?php echo $mhs["Nama"];?>&nim=<?php echo $mhs["NIM"];?>&prodi=<?php echo $mhs["Prodi"];?>&email=<?php echo $mhs["Email"];?>&gambar=<?php echo $mhs["gambar"]; ?>" target="_blank"><?php echo $mhs["Nama"]; ?>
			</a>
		</li>
	</ul>
<?php endforeach; ?>