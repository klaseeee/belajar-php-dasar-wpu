<?php  
	// cek apakah data tidak ada di $_GET
	if (!isset($_GET["nama"]) || 
		!isset($_GET["nim"]) || 
		!isset($_GET["email"]) || 
		!isset($_GET["prodi"])) 
	{
		// redirect
		header("Location: get.php");
		exit;
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar Mahasiswa (GET)</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<ul>
		<li><img src="img/<?php echo $_GET["gambar"];?>" alt="gambar"></li>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["nim"]; ?></li>
		<li><?= $_GET["email"]; ?></li>
		<li><?= $_GET["prodi"]; ?></li>
	</ul>
</body>
</html>									