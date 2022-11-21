<?php
//la funcion session start() del main ya trae todos los parametros del login-check.php

if($_SESSION['permisos_acceso']=="Super Admin"){?>
<!--etiquetas html aqui-->
    <ul class="sidebar-menu">
        <li class="header">Menu</li>
            <?php
                if($_GET['module']="start"){
                    $active_home="active";
                }else{
                    //$active_home =" ";
                }
            ?>

        <li class= " <?php echo $active_home; ?> ">
            <a href="?module=start"><i class="fa fa-home"></i>Inicio</a>
        </li>

        <?php 
       // if($_GET['module']=='start'){?>
            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-file-text"></i><span>Referenciales Generales</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Departamento</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Ciudad</a></li>
                </ul>
            </li>
            
            
            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-file-text"></i><span>Referenciales compras</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Compras</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Depósito</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Producto</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Stock</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>Proveedor</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="javascript:void(0);">
                    <i class="fa fa-file-text"></i><span>Referenciales de ventas</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i>Clientes</a></li>
                </ul>
            </li>

            <?php
         //bloque administrar usuario, visible solo para admin
            if($_GET['module'] == "user" || $_GET['module']=="form-user"){?>
                <li class="active">
                    <a href="?module=user"><i class="fa fa-user"></i>Administrar User</a>
                </li>

            <?php
            } else{ ?>
                <li>
                    <a href="?module=user"><i class="fa fa-user"></i>Administrar User</a>
                </li>
            <?php
            }     //hasta aca bloque usuario
            

             //bloque de Cambiar contraseña
             
            if($_GET['module'] == "pass"){ ?>
                <li class="active">
                    <a href="?module=pass"><i class="fa fa-user"></i>Administrar password</a>
                </li>

            <?php
            } else{ ?>
                <li>
                    <a href="?module=pass"><i class="fa fa-user"></i>Administrar password</a>
                </li>
            <?php
            
            }   //hasta aca cambiar contraseña

            
            
       // } //cierre del start */?>
    </ul>

    <?php
}   
    
    ?>