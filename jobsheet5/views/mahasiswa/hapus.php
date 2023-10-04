<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_mahasiswa']))
{
    $id_mahasiswa = $_GET['id_mahasiswa'];

    $mahasiswaController = new MahasiswaController($db);
    $result = $mahasiswaController->deleteMahasiswa($id_mahasiswa);
    
    if ($result)
    {
        header("location: mahasiswa");
    }
    else
    {
        echo "Gagal menghapus data";
    }
}


?>