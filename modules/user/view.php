
<section class="content-header">
    <h1>
        <i class="fa fa-user icon-title"></i> Gestión de usuarios
        <a class="btn btn-primary btn-social pull-right" href="?module=form-user&form=add" data-toggle="tooltip" title="Agregar">
            <i class="fa fa-plus"></i>Agregar
        </a>
    </h1>
</section>

<section class="content">
    <div class="row">
        <div class="col-mb-12">
            <?php
                if(empty($_GET['alert'])){
                    echo "";
                }elseif($_GET['alert']==1){
                    echo "
                        <div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4><i class= 'icon fa fa-check-circle'></i>Exito</h4>
                            Datos guardados
                        </div>
                    ";
                }elseif($_GET['alert']==2){
                    echo "
                        <div class='alert alert-success alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4><i class= 'icon fa fa-check-circle'></i>Exito</h4>
                                Datos actualizados correctamente
                            </div>
                    ";
                }elseif($_GET['alert']==3){
                    echo "
                        <div class='alert alert-succes alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4><i class= 'icon fa fa-check-circle'></i></h4>
                            Usuario activado correctamente
                        </div>
                    ";
                }elseif($_GET['alert']==4){
                    echo "
                        <div class='alert alert-danger alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4><i class= 'icon fa fa-check-circle'></i></h4>
                            Usuario bloqueado correctamente
                        </div>
                    ";
                }
                elseif($_GET['alert']==5){
                    echo "
                        <div class='alert alert-danger alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4><i class= 'icon fa fa-times-circle'></i>Error</h4>
                            Asegurese de que el formato de la imagen sea el correcto
                        </div>
                    ";
                }
                elseif($_GET['alert']==6){
                    echo "
                        <div class='alert alert-danger alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4><i class= 'icon fa fa-times-circle'></i>Error</h4>
                            Archivo debe ser menor a 1MB
                        </div>
                    ";
                }
                elseif($_GET['alert']==7){
                    echo "
                        <div class='alert alert-danger alert-dismissable'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                            <h4><i class= 'icon fa fa-times-circle'></i>Error</h4>
                            Asegurese de que el tipo de archivo sea *.JPG *.JPEG *.PNG
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
</section>