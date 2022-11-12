<?php
//conexion a la base de datos
//capturar en variables: la direccion, el usuario, el password y la base de datos
$ubicacion = 'localhost';
$user = 'root';
$pass  = '';
$baseD = 'sysweb';
//crear variable que va contener los datos capturados
$conectar = mysqli_connect($ubicacion,$user,$pass,$baseD);

if(mysqli_errno($conectar)){
    echo "error de conexion";
}else{
    echo "conectado a la base de datos!";
}


?>