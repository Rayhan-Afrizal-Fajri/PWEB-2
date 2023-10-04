<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

//instansiasikan class database
$database = new database;
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);

$mahasiswa = $mahasiswaController->getAllMahasiswa();


?>


<body>
    <div class="px-5">

    <h3>Data Mahasiswa</h3>
    <a href="tambah_mahasiswa" class = "btn btn-primary mb-2 mt-3">Tambah Mahasiswa</a>
    <table class ="table table-striped table-bordered">

    <tr style = "text-align : center">
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
    </tr>

    <?php

    $no = 1;
    foreach ($mahasiswa as $x)
    {
    ?>


    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nim'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['program_studi'] ?></td>
        <td><?php echo $x['jenis_kelamin'] ?></td>
        <td>
            <a href="edit_mahasiswa/<?php echo $x['id_mahasiswa']; ?>" class = "btn btn-warning">Edit</a>
            <a href="hapus_mahasiswa?id_mahasiswa=<?php echo $x['id_mahasiswa']; ?>" class = "btn btn-danger" onclick="return confirm ('Apakah yakin ingin menghapus?')">Hapus</a>
        </td>
    </tr>

    <?php } ?>



    </table>
    </div>

</body>
</div>
</html>