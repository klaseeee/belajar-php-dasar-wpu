<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan PHP</title>
	<style>
		.kotak {
			width: 50px;
			height: 50px;
			border: 1px solid black;
			cursor: pointer;
			transition: 1s;
			margin:  10px 10px;
			float: left;
			text-align: center;
			line-height: 50px;
			/*display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column-reverse;*/
		}
		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%;
			background-color: skyblue;
		}

		.clear {
			clear: both;
		}
	</style>
</head>
<body>
	<?php  
		$nama = [
			["M", "U", "K", "L", "A", "S"],
			["N", "U", "R"],
			["A", "R", "D", "I", "A", "N"]
		];
	?>

	<?php foreach ($nama as $nam) : ?>
		<?php foreach ($nam as $am) : ?>
			<div class="kotak"><?php echo $am; ?></div>	
		<?php endforeach ?>
			<div class="clear"></div>
	<?php endforeach ?>

</body>
</html>