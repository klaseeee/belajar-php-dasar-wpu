<!-- pengulangan pada array -->
<!-- for / foreach -->
<?php  
	$angka = [1, 3, 4, 6, 8, 5, 9, 2, 10];
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan Array</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			background: lightgreen;
			text-align: center;
			line-height: 50px;
			float: left;
			margin: 4px;
			text-align: center;
			line-height: 50px;
		}

		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<!-- pengulangan for -->
	<?php for ($i = 0; $i < count($angka); $i++) { ?>
		<div class="kotak"><?php echo $angka[$i]; ?></div>
	<?php } ?>

	<div class="clear"></div>
	
	<!-- pengulangan foreach -->
	<?php foreach ($angka as $a) { ?>
		<div class="kotak"><?php echo $a?></div>
	<?php } ?>

	<div class="clear"></div>

	<!-- penulisan foreach dengan format templating -->
	<?php foreach ($angka as $a ) : ?>
		<div class="kotak"><?= $a ?></div>
	<?php endforeach; ?>

</body>
</html>