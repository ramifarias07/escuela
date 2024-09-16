<?php
//conectar base de datos
$conexion = new mysqli("localhost","root","","diciembre");
 //recibimos datos del formulario html
$materia = $_POST['materia'];
//generamos la consulta para dar alta en la bd
$alta = "INSERT INTO materia(nombre) VALUES ('$materia')";
//ejecutamos la consulta
$conexion->query($alta);
//verificamos el alta
if ($conexion) {
    echo "Se ha dado de alta con exito ". $materia;
    } else {
        echo "No se ha dado de alta";
    }

?>