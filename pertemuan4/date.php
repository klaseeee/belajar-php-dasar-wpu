<!-- Date -->
<!-- untuk menampilkan tanggal dengan format tertentu -->
	<?php echo date("l, d M Y"); ?>
	
	<br>

<!-- Time -->
<!-- UNIX Timestamp / EPOCH time -->
<!-- detik yang sudah berlalu sejak 1 Januari 1970 -->
	<?php 
		echo time();
		echo date("l, d-M-Y", time()-60*60*24); 
	?>

	<br>

<!-- mktime -->
<!-- membuat sendiri detik  -->
<!-- mktime(0,0,0,0,0,0) -->
<!-- jam, menit, detik, bulan, tanggal, tahun -->
	<?php 
		echo date("l, d M Y", mktime(0,0,0,10,27,2000));
	?>

	<br>

<!-- strtotime -->
	<?php 
		echo date("l, d M Y", strtotime("27 oct 2000")); 
	?>

	<br>

	<?php  
		$nama = 'Muklas Nur Ardiansyah';
		echo strlen($nama);
	?>
	
	
	