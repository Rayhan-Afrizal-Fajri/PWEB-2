<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <title>Edit Mahasiswa</title>
</head>
<body>
    <?php
    include '../classes/database.php';
    $db = new database();
    ?>
    <?php
    foreach ($db->edit($_GET['id']) as $d)
    {
    ?>

<div class="px-5">
    <h3>Edit Data Mahasiswa</h3><br>
    <form action="proses_mahasiswa.php?aksi=update" method="post">
            <table border = "1" class = "table table-sm" style="width : 70%">

                
                <!-- Terbaru -->
                <tr>
                <td>
                    <div class="form-floating">
                        <input type="text" name="nim" maxlength="9" class="form-control form-control-lg" id="floatingInput" placeholder="220302022" value ="<?php echo $d['nim']?>">
                        <label for="floatingInput">NIM</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-floating">
                        <input type="text" name="nama" class="form-control form-control-lg" id="floatingInput" placeholder="Rayhan Afrizal Fajri" value ="<?php echo $d['nama']?>">
                        <label for="floatingInput">Nama</label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="form-floating">
                        <select class="form-select" name="jurusan" id="floatingSelect" aria-label="Floating label select example">
                            <option selected disabled value ="<?php echo $d['jurusan']?>"><?php echo $d['nama']?></option>
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
                        <input type="text" name="semester" class="form-control form-control-lg" id="floatingInput" placeholder="Rayhan Afrizal Fajri" required value ="<?php echo $d['semester']?>">
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

    <?php  }  ?>
</body>
</html>