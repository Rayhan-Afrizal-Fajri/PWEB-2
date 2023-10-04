<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching</title>
</head>
<body>

<form method="post">
    Nilai x =
    <input type="number" name ="x" required>
    <input type="submit" value = "cek" name="simpan">
</form>

<?php

if (isset($_POST['simpan']))
{
    $x = $_POST["x"];

    if ($x > 0)
    {
        echo "Bilangan $x adalah bilangan positif";
    }
    else if ($x <0)
    {
        echo "Bilangan $x adalah bilangan negatif";
    }
    else
    {
        echo "Bilangan $x adalah bilangan nol";
    }
}

?>

</body>
</html>