<?php  
	// cek apakah tombol submit sudah ditekan atau belum
	if (isset($_POST["submit"])) {
		// cek apakah username dan password sudah benar atau belum
		if ($_POST["username"] == "muklas" && $_POST["password"] == "123") {
		// jika sudah, maka redirect ke halaman admin
			header("Location: admin.php");
			exit;
		} else {
		// jika belum, maka tampilkan pesan kesalahan
			$error = true;
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log In</title>
</head>
<body>
	<h1>Log In</h1>

	<?php if (isset($error)) : ?>
		<p style="color: red; font-style: italic;"s>username atau password salah!</p>	
	<?php endif; ?>
	
	<ul>
		<form action="" method="post"> 
			<li>
				<label for="username">username: </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">password: </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="submit">kirim</button>
			</li>
		</form>
	</ul>
</body>
</html>							