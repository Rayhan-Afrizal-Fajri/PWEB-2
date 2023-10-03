<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous" />
    <title>Tampil mahasiswa</title>
</head>
<body>
    <?php

    include '../classes/database.php';
    $db = new database;
    ?>

    <h3>Data Mahasiswa</h3>
    <a href="input_mahasiswa.php" class = "btn btn-primary">Tambah Mahasiswa</a><br><br>
    <table class ="table table-striped table bordered" style = "width : 80%">

    <tr style = "text-align : center">
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Jurusan</th>
    <th>Semester</th>
    <th>Aksi</th>
    </tr>
    
    <?php

    $no = 1;
    foreach ($db->tampil_mahasiswa() as $x)
{
    ?>
    
    
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nim'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['jurusan'] ?></td>
        <td><?php echo $x['semester'] ?></td>
        <td>
            <a href="edit_mahasiswa.php?id=<?php echo $x['id']; ?>&aksi=edit" class = "btn btn-warning">Edit</a>
            <a href="proses_mahasiswa.php?id=<?php echo $x['id']; ?>&aksi=hapus" class = "btn btn-danger">Hapus</a>
        </td>
    </tr>

    <?php } ?>



    </table>
</body>
</html>