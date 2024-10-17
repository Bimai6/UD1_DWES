<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conteo de repetición de numeros</h1>
    <h3> El array inicial es [1,10,5,1,5,5,8] </h3>
    <?php
    $numeros = [1,10,5,1,5,5,8];

    $repeticiones = array();

    foreach($numeros as $numero){
        if(isset($repeticiones[$numero])){
            $repeticiones[$numero]++;
        }else {
            $repeticiones[$numero]= 1;
        }
    }

    foreach ($repeticiones as $numero => $cantidad) {
        if($cantidad === 1){
            echo "<p> El número $numero aparece una vez </p>";
        }else{
            echo "<p> El número $numero aparece $cantidad veces </p>";
        }
    }
    ?>
</body>
</html>