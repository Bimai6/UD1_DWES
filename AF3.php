<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        table, th, td{
            border: 1px solid black;
            text-align: center;
            padding: 10px;
        }

        thead tr{
            background-color: blue;
            color: white;
        }

        td:first-child{
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <h2>Tabla númerica</h2>
    <table>
        <thead>
            <th>Número</th>
            <th>Cuadrado</th>
            <th>Producto</th>
            <th>Raíz Cuadrada</th>
        </thead>
        <tbody>
        <?php
            for ($i=1; $i <= 10; $i++) { 
                echo "<tr>";
                echo "<td> $i </td>";
                echo "<td>" . ($i*2) . "</td>";
                echo "<td>" . ($i*$i) . "</td>";
                echo "<td>" . number_format(sqrt($i), 2) . "</td>";
                echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</body>
</html>