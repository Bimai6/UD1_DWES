<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];
        $usuarios= [
            'usuario1' => 'contraseña1',
            'usuario2' => 'contraseña2',
            'usuario3' => 'contraseña3'
        ]

    }
?>