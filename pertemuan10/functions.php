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
		$gambar = htmlspecialchars($data["gambar"]);

		// query insert data
		$query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}


	// hapus data
	function hapus ($id) {
		global $conn;

		mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

		return mysqli_affected_rows($conn);
	}




?>