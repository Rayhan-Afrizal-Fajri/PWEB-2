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
<body>
    <h3>Tambah Data Pengajuan</h3> <br>
    <form action="proses_pengajuan.php?aksi=tambah" method="post">
        <div class="mb-3">
        <table border = "1" class = "table table-sm" style="width : 30%">
                <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" class = "form-control" required></td>
            </tr>
            <tr>
                <td>Tanggal Pengajuan</td>
                <td><input type="date" name="tanggal_pengajuan" class = "form-control" required></td>
            </tr>
            <tr>
                <td>Alasan</td>
                <td><textarea name="alasan" cols="30" rows="5" class = "form-control"required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" class = "btn btn-primary"></td>
            </tr>
        </table>
        </div>
</form>
</body>
</html>