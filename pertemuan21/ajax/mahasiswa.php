<?php 
    // sleep(1);

    require '../functions.php';

    $keyword = $_GET["keyword"];

    $query = "SELECT * FROM mahasiswa WHERE 
                nama LIKE '%$keyword%'
                OR
                nim LIKE '%$keyword%'
                OR
                email LIKE '%$keyword%'
                OR 
                jurusan LIKE '%$keyword%'
            ";

    $mahasiswa = query($query);
    // var_dump($mahasiswa);

?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Gambar</th>
    </tr>
    
    <?php $i = 1 ?>
    <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td> <?php echo $i; ?> </td>
            <td>
                <a href="ubah.php?id=<?php echo $row["id"];?>">edit</a> |
                <a href="hapus.php?id=<?php echo $row["id"];?>" onclick = "return confirm('yakin ingin menghapus?');">delete</a>
            </td>
            <td> <?php echo $row["nama"]; ?> </td>
            <td> <?php echo $row["nim"]; ?> </td>
            <td> <?php echo $row["email"]; ?> </td>
            <td> <?php echo $row["jurusan"]; ?> </td>
            <td> <img src="img/<?php echo $row['gambar']; ?>" alt="gambar" width="100px;"> </td>
        </tr>			
    <?php $i++; ?>
    <?php endforeach; ?>
</table>


