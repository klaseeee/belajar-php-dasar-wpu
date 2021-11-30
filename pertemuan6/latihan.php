<?php  
$angka = [
	[1,2,3], 
	[4,5,6], 
	[7,8,9]
];

// echo $angka[1][2];
// echo "<br>";
// echo $angka [2][2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan Array</title>
	<style>
		.kotak {
			width: 100px;
			height: 100px;
			margin: 4px 4px;
			float: left;
			background-color: skyblue;
			text-align: center;
			line-height: 100px;
			transition: 1s;
		}

		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%
		}

		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php foreach ($angka as $an) : ?>
		<?php foreach ($an as $a) : ?>
			<div class="kotak"><?= $a ?></div>
		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach; ?>
</body>
</html>