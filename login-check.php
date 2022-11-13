<?php
//incluir base de datos
require_once "config/database.php";

//variable para usuario
$username = mysqli_real_escape_string($conectMysqli,stripslashes(strip_tags(htmlspecialchars(trim($_POST['username'])))));
//variable para password
$password = md5(mysqli_real_escape_string($conectMysqli,stripslashes(strip_tags(htmlspecialchars(trim($_POST['password']))))));
//comparar con funcion
if(!ctype_alnum($username) OR !ctype_alnum($password)){//validar si son alfanumericos
    header("Location: index.php?alert=1");//llamar al alert con valor 1 del index (el que muestra error)

}else{
    $consultaSql = mysqli_query($conectMysqli, "SELECT * FROM usuarios where username='$username' and password='$password' and status= 'activo'; ")
    or die('error'.mysqli_error($conectMysqli));
    //contar filas de la consulta
    $filas = mysqli_num_rows($consultaSql);
    //comparar si es mayor a 0
    if($filas > 0){
        //covertir a array
        $consultaArray = mysqli_fetch_assoc($consultaSql);
        session_start();
        $_SESSION['id_user'] = $filas['_user'];
        $_SESSION['username'] = $filas['username'];
        $_SESSION['password'] = $filas['password'];
        $_SESSION['name_user'] = $filas['name_user'];
        $_SESSION['permisoAcceso'] = $filas['permisos_acceso'];
        echo "Bienvenido!";
    }else{
        header("Location: index.php?alert=1");
    }
}
 

?>