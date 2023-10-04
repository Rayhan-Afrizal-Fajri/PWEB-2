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

//memanggil class database
    include '../classes/database.php';
    //instansiasi class database
    $db = new database;
    ?>

    <?php

    if (isset($_GET['success']) && $_GET['success'] == "true")
    {
        echo '<div class="alert alert-success" id="successAlert" role="alert">Update Berhasil!</div>';
    }

    ?>

    <!-- <div class="container"> -->
    <h3>Data Pengajuan Cuti Mahasiswa</h3><br>
    <a href="input_pengajuan.php" class="btn btn-primary">Tambah Pengajuan</a><br><br>
    <table class="table table-striped table-bordered" border ="1" style ="width : 90%">
        <tr style ="text-align : center ">
            <th>No</th>
            <th>Nama</th>
            <th>Tangal Pengajuan</th>
            <th>Alasan</th>
            <th>Aksi</th>
        </tr>
        <?php

        $no = 1;
        foreach($db->tampil_pengajuan() as $x)
        {
        ?>
        <tr>
            <td style ="width : 2%"><?php echo $no++; ?></td>
            <td style ="width : 25%"><?php echo $x['nama']; ?></td>
            <td style ="width : 25%"><?php echo $x['tanggal_pengajuan']; ?></td>
            <td><?php echo $x['alasan']; ?></td>
            <td style ="width : 15%">
                <a href="edit_pengajuan.php?id_pengajuan=<?php echo $x['id_pengajuan']; ?>&aksi=edit" class = "btn btn-warning">Edit</a>
                <a href="proses_pengajuan.php?id_pengajuan=<?php echo $x['id_pengajuan'];?>&aksi=hapus" class = "btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>

    </table>
    </div>
    <script>
        function hideAlert()
        {
            var successAlert = document.getElementById('successAlert');
            if (successAlert)
            {
                successAlert.style.display = 'none';
            }
        }

            var successAlert = document.getElementById('successAlert');
            if (successAlert)
            {
                successAlert.style.display = 'block';
                setTimeout(hideAlert, 2000);
            }
    </script>

</body>
</html>

