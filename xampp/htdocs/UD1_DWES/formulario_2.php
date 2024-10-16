<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejemplo04.php" method="POST">
    Nombre: <input type="text" name="nombre" /><br />
    Apellidos: <input type="text" name="apellidos"/><br />
    <label>Mis intereses: </label><br/>
    <input type="checkbox" name="interes[]" value="Deportes"/>Deportes<br/> 
    <input type="checkbox" name="interes[]" value="Música"/>Música<br/> 
    <input type="checkbox" name="interes[]" value="Libros"/>Libros<br/>
    <input type="checkbox" name="interes[]" value="Cine"/>Cine<br/> 
    <input type="submit" value="Enviar">
</form>
</body>
</html>