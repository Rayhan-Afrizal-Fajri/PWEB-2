<?php

include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

$database = new database();
$db = $database->getKoneksi();


if (isset($_GET['id_mahasiswa']))
{
    $id_mahasiswa = $_GET['id_mahasiswa'];

    $mahasiswaController = new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaById($id_mahasiswa);

    if ($mahasiswaData)
    {
        if (isset($_POST['submit']))
        {
             $nim = $_POST['nim'];
             $nama = $_POST['nama'];
             $program_studi = $_POST['program_studi'];
             $jenis_kelamin = $_POST['jenis_kelamin'];
             $result = $mahasiswaController->updateMahasiswa($id_mahasiswa, $nim, $nama, $program_studi,$jenis_kelamin);

             if ($result)
             {
                header ("location:mahasiswa");
             }
             else
             {
                header ("location:edit_mahasiswa");
             }
        }
    }
    else
    {
        echo "Mahasiswa tidak ditemukan";   
    }   
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Edit Mahasiswa</title>
</head>
<body>
<div class="px-5">
    <h3>Edit Data Mahasiswa</h3><br>
    <?php if ($mahasiswaData) { ?>
    <form action="" method="post">
        <?php
        foreach ($mahasiswaData as $d => $value) {        
        ?> 
        <table border="0" class = "table table-sm" style="width : 50%">
            <tr>
                <td width ="100">
                    <?php
                    echo $d;
                    ?>
                </td>
                <td>
                    <input type="text" class="form-control" name="<?php echo $d ?>" value="<?php echo $value ?>">
                </td>
            </tr>  
        <?php
        } 
        ?> 
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </td>
        </tr>
        </table>
    </form>
    <?php  }  ?>
    </div>
</body>
</html>