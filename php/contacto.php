<?php

include 'conexion.php';

$nombre= $_POST ['nombre'] ?? "";
$correo= $_POST['correo']?? "";
$telefono= $_POST ['telefono']?? "";
$mensajes= $_POST['mensajes']?? "";
$inmuebles= $_POST ['inmuebles']?? "";
$presupuesto= $_POST['presupuesto']?? "";
$modocontacto= $_POST ['modocontacto']?? "";
$fecha= $_POST['fecha']?? "";
$hora= $_POST['hora']?? "";

$query = "INSERT INTO contacto (nombre, correo, telefono, mensaje, opcion, presupuesto, modo_contacto, fecha, hora)
                        Values ('$nombre', '$correo', $telefono, '$mensajes', '$inmuebles', $presupuesto, '$modocontacto', '$fecha', '$hora')";

                        $verificacorreo = mysqli_query ($conexion, "select * from contacto where correo='$correo'");
                        if(mysqli_num_rows($verificacorreo)>0){
                            echo ' 
                            <script>
                                alert("el correo ya existe");
                                window.location = "../Views/Pages/Contactanos.php";
                            </script>';
                            exit();
                        }

                        $ejecutar = mysqli_query($conexion, $query);
                        if ($ejecutar){
                            echo ' 
                            <script>
                                alert("usuario ha sido almacenado correctamente");
                                window.location = "../Views/Pages/Contactanos.php";
                            </script>';
                        }else{
                            echo '
                            <script>
                                alert("El usuario no ha sido almacenado correctamente");
                                window.location = "../Views/Pages/Contactanos.php";
                            </script>';
                        }

                        mysqli_close($conexion);


?>
