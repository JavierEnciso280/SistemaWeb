<?php

//procesar los eventos de formularios que vienen del form-user


session_start();

require "../../config/database.php";

if(empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=../../index.php?alert=3'>";
}else{
    //hay dos eventos que son agregar(act=add) y editar(act=insert)
    if($_GET['act']=='insert'){
        //capturar los valores del name del formulario agregar
        $username = mysqli_real_escape_string($conex, trim($_POST['username']));
        $password = md5(mysqli_real_escape_string($conex, trim($_POST['contraseña'])));
        $nameUser = mysqli_real_escape_string($conex, trim($_POST['name_user']));
        $permisos = mysqli_real_escape_string($conex, trim($_POST['permisos_acceso']));
        $correo = mysqli_real_escape_string($conex, trim($_POST['correo']));
        $tel = mysqli_real_escape_string($conex, trim($_POST['telefono']));
        //crear la consulta
        $query = mysqli_query($conex, "INSERT INTO usuarios (name_user,username,password,permisos_acceso,telefono,email) values ('$nameUser','$username','$password','$permisos','$tel','$correo');")
        or die('error'.mysqli_error($conex));
        //comprobar si es correcto el query
        if($query){
            header("Location: ../../main.php?module=user&alert=1");
        }

    }else{
        if($_GET['act']=='edit'){
            
        }
    }
}

?>