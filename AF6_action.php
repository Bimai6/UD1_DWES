<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nombre = trim($_POST['nombre']);
    $apellidos = trim($_POST['apellidos']);
    $direccion = trim($_POST['direccion']);
    $poblacion = trim($_POST['poblacion']);
    $sexo = isset($_POST['sexo']) ? $_POST['sexo'] : null;
    $condiciones = isset($_POST['condiciones']) ? true : false;

    if (empty($nombre) || empty($apellidos) || empty($direccion) || empty($poblacion) || !$condiciones || is_null($sexo)) {
        header('Location: AF6.php?error=Por favor, completa todos los campos y acepta las condiciones.');
        exit;
    }

    if (!preg_match('/^[0-9]{5}-[a-zA-Z]+$/', $poblacion)) {
        header('Location: AF6.php?error=El formato de población es incorrecto. Debe ser 28001-Madrid sin espacios.');
        exit;
    }

    $bienvenida = ($sexo == 'masculino') ? "Bienvenido" : "Bienvenida";
    echo "<h1>$bienvenida $nombre $apellidos</h1>";
    echo "<p>Dirección: $direccion</p>";
    echo "<p>Población: $poblacion</p>";
    
} else {
    header('Location: AF6.php?error=Acceso no permitido, por favor completa el formulario.');
    exit;
}
?>