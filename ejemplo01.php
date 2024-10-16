<?php

$idioma = $_POST['idioma'];
if ($idioma == 'es') {
    $bienvenida = "Tu nombre completo es ";
} elseif ($idioma == 'en') {
    $bienvenida = "Your full name is ";
}
echo $bienvenida . " " . $_POST['nombre'] . " " . $_POST['apellidos'];
?>