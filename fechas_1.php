<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Fecha actual: ";
echo date("d-m-Y")."<br/>";
echo "Fecha y hora actual: ";
echo date ("d-m-Y\th:i:s")."<br/>";
echo "Hoy es: ";
echo date("l").", ".date("d")." de ".date("F")." de ".date("Y")."<br/>";

//2
echo "Fecha actual: ";
echo date("d-m-Y")."<br/>";
//Generamos una fecha nueva con mktime
$fecha= mktime(10,15,35,10,5,2019);
$dia=date("l, d-m-Y",$fecha);
$hora=date("H:i:s",$fecha);
echo "Fecha generada con mktime: $dia $hora <br/>";

//3
$string= "Bienvenido a mi página web.";
$first_letter= $string[0];
$last_letter= $string[strlen($string) - 2];

echo "<strong>" . $first_letter . ": es la primera letra, " . $last_letter . ": es la segunda letra. </strong>";

//4
$string2= "10 de Marzo de 2022";
$primer_de= strpos($string2, "de");
$segundo_de= strrpos($string2, "de");
$day= substr($string2, 0, $primer_de-1);
$month= substr($string2, $primer_de+3, $segundo_de-1);
$year= substr($string2, $segundo_de+3);

echo "<h3> Fecha completa: " . $string2 . "</h3>"; 


?>

</body>
</html>