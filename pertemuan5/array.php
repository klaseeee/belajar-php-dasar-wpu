<?php  
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index yang dimulai dari 0


// membuat array
	// cara lama
	$hari = array("senin", "selasa", "rabu");
	// cara baru
	$bulan = ["januari", "februari", "maret"];
	$arr1 = [123, "tulisan", false];

// menampilkan array
	// var_dump()
	// print_r()

	// var_dump($hari);
	// echo "<br>";
	// print_r($bulan);

// menampilkan 1 elemen pada array
	// echo "<br>";
	// echo $arr1[1];

// menambahkan elemen baru pada array
	print_r($hari);
	echo "<br>";

	var_dump($hari);
	$hari[] = "kamis";
	$hari[] = "jumat";
	echo "<br>";
		var_dump($hari);
?>