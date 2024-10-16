<?php
if(!isset($_POST['nombre']) || empty(trim($_POST['nombre']))){
    $mensaje = urlencode("El campo 'nombre' no ha sido rellenado.");
    header("Location: " . $_SERVER['HTTP_REFERER'] . "?error=" . $mensaje);
    exit();
}
?>