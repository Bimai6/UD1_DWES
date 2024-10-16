<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Formativa 6</title>
</head>
<body>
    <form action="AF6_action.php" method="POST">
        Nombre: <input type="text" name="nombre"> </br>
        Apellidos: <input type="text" name="apellidos"> <br/>
        Dirección: <input type="text" name="direccion"> <br/>
        Población: <input type="text" name="poblacion"> <br/>
        <label>Sexo:</label>
        <input type="radio" name="sexo" value="masculino">
        <input type="radio" name="sexo" value="femenino"> <br/>
        <label>Acepto las condiciones de acceso de la página</label>
        <input type="checkbox" name="aceptar"> <br/>
        <input type="submit" value="Enviar"> <br/>
    </form>
</body>
</html>