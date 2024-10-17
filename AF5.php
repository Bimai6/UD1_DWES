<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Conversor de unidades métricas</h2>
    <form method= "POST">
        <label for="medidaUsada">Elige el tipo de medición que vas a usar:</label>
        <select name="medidaUsada" id="medidaUsada">
            <option value="yardas"> Yardas 
            <option value="pies"> Pies 
            <option value="pulgadas"> Pulgadas 
            <option value="millas"> Millas 
        </select> <br/>
        <label for="medidadPedida">Elige el tipo de medición que quieres recibir:</label>
        <select name="medidaPedida" id="medidaPedida">
            <option value="kilometros"> Kilómetros 
            <option value="metros"> Metros
            <option value="centimetros"> Centímetros
        </select> <br/>
        
        <label for="cantidad"> Introduce una cantidad: </label>
        <input type="number" name="cantidad"> <br/>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $cantidad= $_POST['cantidad'];
        $valorOriginal= $_POST['medidaUsada'];
        $valorSolicitado= $_POST['medidaPedida'];

        $tablaDeConversion = [
            'pulgadas' => [
                'kilometros' => 0.0000254,
                'metros' => 0.0254,     
                'centimetros' => 2.54  
            ],
            'pies' => [
                'kilometros' => 0.0003048,  
                'metros' => 0.3048,         
                'centimetros' => 30.48
            ],
            'yardas' => [
                'kilometros' => 0.0009144,   
                'metros' => 0.9144,          
                'centimetros' => 91.44     
            ],
            'millas' => [
                'kilometros' => 1.60934,    
                'metros' => 1609.34,       
                'centimetros' => 160934
            ]
        ];

        $valor = $cantidad * $tablaDeConversion[$valorOriginal][$valorSolicitado];

        echo "<p> La cantidad $cantidad $valorOriginal equivale a $valor $valorSolicitado </p>";
    }


    ?>
</body>
</html>