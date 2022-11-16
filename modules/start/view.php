<?php

if($_SESSION['permisos_acceso']=='Super Admin'){?>

<section class="content-header">
    <h1>
        <i class="fa fa-home icon-title"></i>Inicio
    </h1>
    <ol class="breadcrumb">
        <li><a href="?module=start"><i class="fa fa-home"></i></a></li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p style="font-size: 15px;">
                    <i class="icon fa fa-user">Bienvenido/a <strong><?php echo $_SESSION['name_user'];?></strong> a la aplicación: <strong>SysWeb</strong></i>
                </p>
            </div>
        </div>
    </div>

    <h2>Formularios de movimiento</h2>
        <!--     bloque compras-->    
    <div class="row">

        <div class="col-lg-4 col-xs-4">
            <div style="background-color: #00c0ef; color:#fff;" class="small-box">
                <div class="inner">
                    <p><strong>Compras</strong>
                        <ul>
                            <li>Registrar</li>
                            <li>la compra</li>
                            <li>de Productos</li>
                        </ul>
                    </p>
                </div>

                <div class="icon">
                    <i class="glyphicon glyphicon-piggy-bank"></i>
                </div>
                <a href="?module-compras" class="small-box-footer" title="Registrar Compras"data-toggle="tooltip"><i class="fa fa-plus"></i></a>
            </div>
        </div>
    
            <!--bloque ventas-->
        
        <div class="col-lg-4 col-xs-4">
            <div style="background-color: #6958db; color:#fff;" class="small-box">
                <div class="inner">
                    <p><strong>Ventas</strong>
                        <ul>
                            <li>Registrar</li>
                            <li>ventas</li>
                            <li>de Productos</li>
                        </ul>
                    </p>
                </div>

                <div class="icon">
                    <i class="fa fa-cart-plus"></i>
                </div>
                <a href="?module-ventas" class="small-box-footer" title="Registrar Ventas" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
            </div>
        </div>
          
            <!-- bloque stock-->

        
        <div class="col-lg-4 col-xs-4">
            <div style="background-color: #FFC300; color:#fff;" class="small-box">
                <div class="inner">
                    <p><strong>Stock de Productos</strong>
                        <ul>
                            <li>Visualizar</li>
                            <li>stock</li>
                            <li>de Productos</li>
                        </ul>
                    </p>
                </div>

                <div class="icon">
                    <i class="fa fa-area-chart"></i>
                </div>
                <a href="?module-stock" class="small-box-footer" title="Ver stocK" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
            </div>
        </div>
            
        

    </div>
    
</section>

<?php }elseif($_SESSION['permisos_acceso']== 'ventas'){?>
    <section class="content-header">
    <h1>
        <i class="fa fa-home icon-title"></i>Inicio
    </h1>
    <ol class="breadcrumb">
        <li><a href="?module=start"><i class="fa fa-home"></i></a></li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p style="font-size: 15px;">
                    <i class="icon fa fa-user">Bienvenido/a <strong><?php echo $_SESSION['name_user'];?></strong> a la aplicación: <strong>SysWeb</strong></i>
                </p>
            </div>
        </div>
    </div>

    <h2>Formularios de movimiento</h2>
        <!--     bloque compras-->    
    <div class="row">
    
            <!--bloque ventas-->
        
        <div class="col-lg-4 col-xs-4">
            <div style="background-color: #6958db; color:#fff;" class="small-box">
                <div class="inner">
                    <p><strong>Ventas</strong>
                        <ul>
                            <li>Registrar</li>
                            <li>ventas</li>
                            <li>de Productos</li>
                        </ul>
                    </p>
                </div>

                <div class="icon">
                    <i class="fa fa-cart-plus"></i>
                </div>
                <a href="?module-ventas" class="small-box-footer" title="Registrar Ventas" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
            </div>
        </div>
          
            <!-- bloque stock-->

        
        <div class="col-lg-4 col-xs-4">
            <div style="background-color: #FFC300; color:#fff;" class="small-box">
                <div class="inner">
                    <p><strong>Stock de Productos</strong>
                        <ul>
                            <li>Visualizar</li>
                            <li>stock</li>
                            <li>de Productos</li>
                        </ul>
                    </p>
                </div>

                <div class="icon">
                    <i class="fa fa-area-chart"></i>
                </div>
                <a href="?module-stock" class="small-box-footer" title="Ver stocK" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
            </div>
        </div>
            
        

    </div>
    
</section>

<?php
}elseif($_SESSION['permisos_acceso']=='compras'){?>
    <section class="content-header">
    <h1>
        <i class="fa fa-home icon-title"></i>Inicio
    </h1>
    <ol class="breadcrumb">
        <li><a href="?module=start"><i class="fa fa-home"></i></a></li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-lg-12 col-xs-12">
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p style="font-size: 15px;">
                    <i class="icon fa fa-user">Bienvenido/a <strong><?php echo $_SESSION['name_user'];?></strong> a la aplicación: <strong>SysWeb</strong></i>
                </p>
            </div>
        </div>
    </div>

    <h2>Formularios de movimiento</h2>
        <!--     bloque compras-->    
    <div class="row">

        <div class="col-lg-4 col-xs-4">
            <div style="background-color: #00c0ef; color:#fff;" class="small-box">
                <div class="inner">
                    <p><strong>Compras</strong>
                        <ul>
                            <li>Registrar</li>
                            <li>la compra</li>
                            <li>de Productos</li>
                        </ul>
                    </p>
                </div>

                <div class="icon">
                    <i class="glyphicon glyphicon-piggy-bank"></i>
                </div>
                <a href="?module-compras" class="small-box-footer" title="Registrar Compras"data-toggle="tooltip"><i class="fa fa-plus"></i></a>
            </div>
        </div>
            <!-- bloque stock-->
        <div class="col-lg-4 col-xs-4">
            <div style="background-color: #FFC300; color:#fff;" class="small-box">
                <div class="inner">
                    <p><strong>Stock de Productos</strong>
                        <ul>
                            <li>Visualizar</li>
                            <li>stock</li>
                            <li>de Productos</li>
                        </ul>
                    </p>
                </div>

                <div class="icon">
                    <i class="fa fa-area-chart"></i>
                </div>
                <a href="?module-stock" class="small-box-footer" title="Ver stocK" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
            </div>
        </div>
            
        

    </div>
    
</section>

<?php
}
?>