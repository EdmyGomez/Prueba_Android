<?php

    $conexion = mysqli_connect("localhost:3307", "root", "", "bienes_raices");
    

    if($conexion){
        echo 'la conexión es exitosa';
    }else{
        echo 'No se pudo conectar con la base de datos';

    }
?>