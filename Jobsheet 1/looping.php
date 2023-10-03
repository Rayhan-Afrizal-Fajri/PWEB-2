<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php

    echo "Perulangan for bilangan genap dari 0 sampai 10 <br>";
    for($x = 0; $x <=10; $x+=2)
    {
        if ($x % 2 == 0)
        {
            echo "$x<br>";
        }
    }

    echo "<br>Perulangen while bilangan ganjil dari 0 sampai 10 <br>";
    $x = 1;
    while ($x <= 10)
    {
        if ($x % 2 == 1)
        {
            echo "$x<br>";
        }
    $x++;
    }

    echo "<br>Perulangan do while bilangan prima kurang dari 20<br>";

    $y = 2;
    do
    {
        $isPrima = true;

        for ($i = 2; $i <= sqrt($y); $i++)
        {
            if ($y % $i == 0)
            {
                $isPrima = false;
            }
        }

        if ($isPrima)
        {
            echo "$y <br>";
        }
        $y++;
    }while ($y < 20);

    ?>
</body>
</html>