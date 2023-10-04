<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Tambah Mahasiswa</title>
</head>

<?php require '../../index.php'; ?>
<body>
<div class="px-5">
    <h3>Tambah Data Mahasiswa</h3><br>
    <form action="proses_tambah_mahasiswa" method="post">

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
                        <select class="form-select" name="program_studi" id="floatingSelect" aria-label="Floating label select example" required>
                            <option selected disabled>Program Studi</option>
                            <option value="D-3 Teknik Informatika">D-3 Teknik Informatika</option>
                            <option value="D-4 Rekayasa Keamanan Siber">D-4 Rekayasa Keamanan Siber</option>
                            <option value="D-4 Akuntansi Lembaga Keuangan Syariah">D-4 Akuntansi Lembaga Keuangan Syariah</option>
                            <option value="D-4 Teknologi Rekayasa Multimedia">D-4 Teknologi Rekayasa Multimedia</option>
                        </select>
                        <label for="floatingSelect">Pilih Opsi</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-floating">
                        <select name="jenis_kelamin" id="floatingSelect" aria-label="Floating label select example" class="form-select" required>
                            <option selected disabled>Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        <label for="floatingSelect">Pilih Opsi</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" class="btn btn-primary"></td>
            </tr>   
        </table> 
    </form>
    </div>
</body>
</html>