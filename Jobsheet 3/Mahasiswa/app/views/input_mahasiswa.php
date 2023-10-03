<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h3>Tambah Data Mahasiswa</h3><br>
    <form action="proses_mahasiswa.php?aksi=tambah" method="post">
        <div class="mb-3">
        <table border="0" class = "table table-sm table-hover " style="width : 30%">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" class="form-control" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" class="form-control" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan" class ="form-control ">
                        <option value="" selected disbled>Pilih Opsi</option>
                        <option value="Komputer dan Bisnis" >Komputer dan Bisnis</option>
                        <option value="Mesin dan Pertanian" >Mesin dan Pertanian</option>
                        <option value="Listrik dan Mekatronika" >Listrik dan Mekatronika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><input type="text" name="semester" class="form-control" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="btn btn-primary"></td>
            </tr>
        </table>    
        </div>
    </form>
</body>
</html>