<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Tambah Mahasiswa</title>
</head>
<?php include "navbar.php" ?>

<?php



?>
<body>
<div class="px-5">
    <h3>Tambah Data Mahasiswa</h3><br>
    <form action="proses_mahasiswa.php?aksi=tambah" method="post">

        <table border="0" class = "table table-sm" style="width : 50%">
            <tr>
                <td>
                    <div class="form-floating">
                        <input type="text" name="nim" maxlength="9" class="form-control form-control-lg" id="floatingInput" placeholder="220302022" required>
                        <label for="floatingInput">NIM</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-floating">
                        <input type="text" name="nama" class="form-control form-control-lg" id="floatingInput" placeholder="Rayhan Afrizal Fajri" required>
                        <label for="floatingInput">Nama</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-floating">
                        <select class="form-select" name="jurusan" id="floatingSelect" aria-label="Floating label select example">
                            <option selected disabled>Jurusan</option>
                            <option value="Komputer dan Bisnis">Komputer dan Bisnis</option>
                            <option value="Mesin dan Pertanian">Mesin dan Pertanian</option>
                            <option value="Listrik dan Mekatronika">Listrik dan Mekatronika</option>
                        </select>
                        <label for="floatingSelect">Pilih Opsi</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                <div class="form-floating">
                        <input type="text" name="semester" class="form-control form-control-lg" id="floatingInput" placeholder="Rayhan Afrizal Fajri" required>
                        <label for="floatingInput">Semester</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-primary"></td>
            </tr>
        </table>    

    </form>
    </div>
</body>
</html>