<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num= 5.18756;
        $truncado= bcdiv($num, 1, 4);
        $redondeado= round($num, 4, PHP_ROUND_HALF_UP);

        echo "<h2>" . "El valor truncado de " . $num . " es ". $truncado . "</h2>";
        echo "<h2>" . "El valor redondeado de " . $num . " es ". $redondeado . "</h2>";
    ?>
</body>
</html>