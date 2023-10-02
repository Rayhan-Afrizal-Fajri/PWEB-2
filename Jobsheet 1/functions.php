<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <?php

    function persegi($sisi) {
        return $sisi * $sisi;
    }

    function persegi_panjang($p, $l)
    {
        return $p * $l;
    }

    function lingkaran($r)
    {
        return 3.14 * $r * $r;
    }

    ?>
    
   <form action="" method="post">
    Masukkan panjang <input type="number" name="p"> <br>
    Masukkan lebar <input type="number" name="l"> <br>
    Masukkan radius <input type="number" name = "r"> <br>
    <input type="submit" value="cek">
   </form>
    
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $p = $_POST['p'];
        $l  = $_POST['l'];
        $r = $_POST['r'];

        echo "Luas Persegi Panjang " . persegi_panjang($p, $l);
        echo "<br>Luas Lingkaran " . lingkaran($r);
    }
    ?>
</body>
</html>