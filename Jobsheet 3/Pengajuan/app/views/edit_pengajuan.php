<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous" />
    <title>Document</title>
</head>
<?php
include "navbar.php";
?>
<body>

    <div class="px-5">
        <?php
        include '../classes/database.php';
        $db = new database();
        ?>
        <?php
        foreach ($db->edit($_GET['id_pengajuan']) as $d)
        {
        ?>

        <h3>Edit Data Mahasiswa</h3>
        <form action="proses_pengajuan.php?aksi=update" method="post">
            <div class="mb-3">
            <table border = "1" class = "table table-sm" style="width : 70%">
                    <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id_pengajuan" value ="<?php echo $d['id_pengajuan']?>">
                        <input class="form-control" type="text" name="nama" value ="<?php echo $d['nama']?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Pengajuan</td>
                    <td><input class="form-control" type="date" name="tanggal_pengajuan" value ="<?php echo $d['tanggal_pengajuan']?>"></td>
                </tr>
                <tr>
                    <td>Alasan</td>
                    <td><textarea class="form-control" name="alasan" cols="30" rows="5" value =""><?php echo $d['alasan']?></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" class="btn btn-primary">Simpan</button></td>
                </tr>
            </table>
            </div>

            <?php
            }
            ?>
    </div>
</form>
</body>
</html>