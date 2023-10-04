<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit']))
{
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $program_studi = $_POST['program_studi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $mahasiswaController =  new MahasiswaController($db);
    $result = $mahasiswaController->createMahasiswa($nim, $nama, $program_studi, $jenis_kelamin);

    if ($result)
    {
        header("location:mahasiswa");
    }
    else
    {
        header("location:tambah");
    }
}

?>