<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $radio= 5;
    $longitud= 2 * pi() *$radio;
    $superficie= pi() * ($radio**2);
    $volumen= 4/3 * pi() *($radio**3);

    echo "<h1>" . "La longitud del " . $radio . " es " . $longitud . "<h1>";
    echo "<h2>" . "La superficie del " . $radio . " es " . $superficie . "<h2>";
    echo "<h3>" . "La volumen del " . $radio . " es " . $volumen . "<h3>";
?> 
</body>
</html>

