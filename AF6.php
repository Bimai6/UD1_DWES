<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Formativa 6</title>
</head>
<body>
<h1>Formulario de Datos Personales</h1>

<?php
if (isset($_GET['error'])) {
    echo "<p style='color: red;'>" . htmlspecialchars($_GET['error']) . "</p>";
}
?>
    <form action="AF6_action.php" method="POST">
    <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos"><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" ><br><br>

        <label for="poblacion">Población (formato: 28001-Madrid):</label>
        <input type="text" id="poblacion" name="poblacion" ><br><br>

        <label for="sexo">Sexo:</label>
        <input type="radio" id="masculino" name="sexo" value="masculino" > Masculino
        <input type="radio" id="femenino" name="sexo" value="femenino" > Femenino<br><br>

        <label for="condiciones">
            <input type="checkbox" id="condiciones" name="condiciones" >
            Acepto las condiciones de uso
        </label><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>