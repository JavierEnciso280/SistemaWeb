<?php include 'login-check.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0
    maximun-scale=1, user-scalable=yes">
    <meta name="description" content="SystemWeb">
    <meta name="autor" content="Javier Enciso">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <div class="login-box">
        <div style="color:#3c8dbc;" class="login-logo">
            <img src="assets/img/favicon.ico" alt="Imagen Utic" height="50">
            <b>SysWeb</b>
        </div>
    
        <?php
        if(empty($_GET['alert'])){
            echo "";
        }
        elseif($_GET['alert']==1){
            echo "
                <div class='alert alert-danger alert-dismissable>
                <button type='buton' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>< class='icon fa fa-times-circle></i>Error al iniciar sesion</h4>
                Usuario o contraseña incorrecta, vuelva a ingresar los datos!
                </div>
            ";
        }
        elseif($_GET['alert']==2){
            echo "
            <div class='alert alert-sucess alert-dismissable>
            <button type='buton' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <h4>< class='icon fa fa-times-circle></i>Sesión cerrada</h4>
            Has cerrado tu sesión correctamente
            </div>
            ";
        }?>

        <div class="login-box-body">
            <p class="login-box-msg"><i class="fa fa-user icon-title">Por favor inicie sesión</i></p>
            <br>
            <form action="login-check.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Usuario" autocomplete="off" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-12">
                        <input type="submit" name="login" id="" class="btn-primary btn-lg btn-block btn-flat" value="Ingresar">
                    </div>
                </div>
            </form>
        </div>

        


    </div>
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>