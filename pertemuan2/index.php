<?php
// Pertemuan 2 - PHP dasar
// Sintaks PHP

// Standar Output 
// echo, print (mencetak sesuatu ke layar)
// print_r (mencetak isi array)
// var_dump (untuk melihat isi dari variabel)

// echo
    // echo "Muklas Nur Ardiansyah <br>";

// print
    // print 'Muklas Nur Ardiansyah(2) <br>';

// print_r()
    // print_r('Muklas Nur Ardiansyah <br>');

// var_dump()
    // var_dump('Muklas Nur Ardiansyah');
?>


<!-- Penulisan sintaks PHP  -->
    <!-- // 1. PHP di dalam HTML -->
    <!-- // 2. HTML di dalam PHP  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>

    <!-- PHP didalam HTML (akan banyak digunakan) -->
    <h1> Halo dunia: <?php echo 'PHP didalam HTML' ?></h1> 

    <!-- HTML didalam PHP (tidak direkomendasikan) -->
    <?php echo "<h1> HTML didalam PHP</h1>";  ?>
</body>
</html>

<!-- Variabel dan Tipe Data -->
<!-- Variabel -->
<!-- Tidak boleh diawali oleh angka, tapi boleh mengandung angka -->
<!-- tidak boleh ada spasi dalam penamaan variabel -->
    
<!-- contoh -->
    <?php 
        $nama = "klaseeee";
        echo $nama; 
    ?>

    <br>

<!-- operator -->
<!-- aritmatika -->
<!-- + - * / % -->

<!-- contoh : -->
    <?php
        $x = 10;
        $y = 20;
        echo $x * $y;
    ?>

    <br>

<!-- Operator penggabung string / concatenation / concat -->
<!-- adalah titik (.) -->
<!-- contoh -->
    <?php 
        $nama_depan = "Muklas ";
        $nama_belakang = "Nur Ardiansyah";
        echo $nama_depan.$nama_belakang;
    ?>

<!-- Operator assignment -->
<!-- =, +=, -=, *=, /=, %=, .= -->

<!-- contoh -->
    <?php 
        $x = 5;
        $x += 10;
        echo $x;

        $nama = "Muklas";
        $nama .= " ";
        $nama .= "Nur Ardiansyah";
        echo $nama; 
    ?>

    <br>

<!-- Operator Perbandingan -->
<!-- <, >, <=, >=, ==, != -->
<!-- contoh -->
    <?php var_dump(1 == "1"); ?>
    
<!-- Operator Identitas -->
<!-- ===, !== -->
    <?php var_dump (1 === "1"); ?>

<br>

<!-- Operator Logika -->
<!-- &&, ||, ! -->
    <?php 
        $x = 20;
        var_dump(10 < $x && $x % 2 == 0);
        var_dump (10 > $x || $x % 2 == 0); 
    ?>
    

    
    
