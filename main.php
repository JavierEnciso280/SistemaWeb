<?php
    session_start();
?>


<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html charset=utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0
    maximun-scale=1, user-scalable=yes'>
    <meta name="description" content="SystemWeb">
    <meta name="autor" content="Javier Enciso">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/skins/skin-blue.css">
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/plugins/datepicker/datepicker.min.css" type="text/css">
    <link rel="stylesheet" href="assets/plugins/chosen/css/chosen.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/skins/skin-blue.min.css" type="text/css">
    <title>Login</title>
    </head>
    <body class="skin-blue fixed">
        <div class="wrapper"> <!--contenedor-->
            <header class="main-header">
                <a href="#" class="logo">
                    <img src="assets/img/log.png" alt="Logo SysWeb">
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <?php include 'top-menu.php';?>
                        </ul>
                    </div>
                </nav>
            </header>
        
            <aside class="main-sidebar"><!--menu lateral del main-->
                <section class="sidebar">
                    <?php include 'sidebar-menu.php';?> <!--proceso en sidebar-menu.php-->
                </section>
            </aside>
            

            <div class="content-wrapper">
                <?php include 'content.php';?>
                <div class="modal fade" id="logout">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title"><i class="fa fa-sign-out">Salir</i></h4>
                            </div>
                            <div class="modal-body">
                                <p>Deseas salir?</p>
                            </div>
                            <div class="modal-footer">
                                <a type="button" class="btn btn-danger" href="logout.php">Si, salir</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="main-footer">
                <strong>Copyright &copy;<?php date('Y');?>- <a href="#" target="_blank">Desarrollado por X</a></strong>
            </footer>
            
        </div>
        
        <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datepicker/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="assets/plugins/chosen/js/chosen.jquery.min.js" type="text/javascript"></script>
        <script src="assets/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="assets/plugins/slimScroll/jquery.slimscroll.js" type="text/javascript"></script>
        <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <script src="assets/js/jquery.maskMoney.min.js" type="text/javascript"></script>
        <script src="assets/js/app.js" type="text/javascript"></script>
    </body>
</html>