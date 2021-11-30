<?php

require_once __DIR__ . '/mpdf/vendor/autoload.php';

require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Gambar</th>
        </tr>';

    $i = 1;
    foreach($mahasiswa as $row) {
        $html .= '<tr>
            <td>'. $i++ .'</td>
            <td>'. $row["nama"] .'</td>
            <td>'. $row["nim"] .'</td>
            <td>'. $row["email"] .'</td>
            <td>'. $row["jurusan"] .'</td>
            <td><img src="img/'. $row["gambar"] .'" width="100" ></td>
        </tr>';
    }

$html .= '</table>
</body>
</html>'
;

$mpdf->WriteHTML($html);
$mpdf->Output('Daftar Mahasiwa.pdf', \Mpdf\Output\Destination::INLINE);

?>

