<?php  
	// koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "phpdasar");

	// functions query
	function query ($query) {
		global $conn;

		$result = mysqli_query($conn, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}

		return $rows;
	}

	// tambah data
	function tambah ($data) {
		global $conn;
	// ambil data dari tiap elemen form
		$nama = htmlspecialchars($data["nama"]);
		$nim = htmlspecialchars($data["nim"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		// $gambar = htmlspecialchars($data["gambar"]);

		// upload gambar
		$gambar = upload();
		if (!$gambar) {
			return false;
		}


		// query insert data
		$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	// function upload
	function upload () {
		$namaFile = $_FILES['gambar']['name'];
		$ukuranFile = $_FILES['gambar']['size'];
		$error = $_FILES['gambar']['error'];
		$tmpName = $_FILES['gambar']['tmp_name'];

		// cek gambar diupload atau tidak
		if($error === 4) {
			echo "<script> 
					alert('Pilih gambar terlebih dahulu!') 
				</script>";
			
			return false;
		}

		// cek apakah yang diupload adalah file gambar atau bukan
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
		$ekstensiGambar = explode('.', $namaFile);
		$ekstensiGambar = strtolower(end($ekstensiGambar));

		// cek ektensi file yang diupload oleh user
		if ( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
			echo "<script> 
					alert('Yang anda upload bukan gambar!') 
				</script>";
			
			return false;
		}

		// cek gambar jika ukurannya terlalu besar
		if ( $ukuranFile > 1000000 ){
			echo "<script> 
					alert('ukuran gambar terlalu besar!') 
				</script>";
			
			return false;
		}

		// lolos pengecekan dan gambar siap diupload
		// generate nama baru
		$namaFileBaru = uniqid();
		$namaFileBaru .= ".";
		$namaFileBaru .= $ekstensiGambar;

		move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
		return $namaFileBaru;
	}

	// hapus data
	function hapus ($id) {
		global $conn;

		mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

		return mysqli_affected_rows($conn);
	}

	// ubah data
	function ubah ($data) {
		global $conn;

		$id = $data["id"];
		$nama = htmlspecialchars($data["nama"]);
		$nim = htmlspecialchars($data["nim"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		$gambarLama = htmlspecialchars($data["gambarLama"]);

		// cek apakah user memilih gambar baru atau tidak
		if ($_FILES['gambar']['error'] === 4) {
			$gambar = $gambarLama;
		} else {
			$gambar = upload();
		}
		
		$query = "UPDATE mahasiswa SET 
					nama = '$nama',
					nim = '$nim',
					email = '$email',
					jurusan = '$jurusan',
					gambar = '$gambar'

					WHERE id = $id
				";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	// function cari data
	function cari ($keyword) {
		global $conn;

		$query = "SELECT * FROM mahasiswa WHERE 
					nama LIKE '%$keyword%'
					OR
					nim LIKE '%$keyword%'
					OR
					email = '$keyword'
					OR 
					jurusan LIKE '%$keyword%'
				";

		return query($query);
	}

	// function registrasi
	function registrasi ($data) {
		global $conn;

		// ambil data users
		$username = strtolower(stripslashes($data["username"]));
		$password = mysqli_real_escape_string($conn, $data["password"]);
		$konfirmasi = mysqli_real_escape_string($conn, $data["password2"]);

		// cek apakah ada users dengan data yang sama sudah ada atau belum
		$result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

		if(mysqli_fetch_assoc($result)) {
			echo "<script>
					alert('username sudah terdaftar!');
				</script>";
			return false;
		}
		

		// cek konfirmasi password
		if ($password !== $konfirmasi) {
			echo "<script>
					alert('Password tidak sesuai!');
				</script>";

			return false;
		}	

		// enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);
		// var_dump($password); die;

		// membuat query / menambahkan users baru ke database
		$query = "INSERT INTO users VALUES ('', '$username', '$password')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}
?>