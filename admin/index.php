
<?php
session_start();
include("conexion.php");
if(isset($_SESSION['user']))
 {?>

<?php

$result=mysql_query("SELECT count(utc) as visitas from visitas");
$row = mysql_fetch_array($result);
    $nvisitas = $row["visitas"];

$visitas = "select * from visitas";
$visitas2 = mysql_query($visitas);
$tvisitas = mysql_num_rows($visitas2);


$peticion = "select * from libros";
$resultado = mysql_query($peticion);
$contados = mysql_num_rows($resultado);

$peticion2 = "select * from comentarios";
$resultado2 = mysql_query($peticion2);
$contados2 = mysql_num_rows($resultado2);

$peticion3 = "select * from proveedor";
$resultado3 = mysql_query($peticion3);
$contados3 = mysql_num_rows($resultado3);

$peticion5 = "select * from administrador_biblioteca";
$resultado5 = mysql_query($peticion5);
$contados5 = mysql_num_rows($resultado5);

$peticion6 = "select * from usuario_estudiante";
$resultado6 = mysql_query($peticion6);
$contados6 = mysql_num_rows($resultado6);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Biblioteca UNI | Panel Control</title>
    <link rel="shortcut icon" href="../images/iconolibreria.ico">
    <!-- Libreria de Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- hojas de estilo css -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- graficos morris -->
    <link href="css/morris.css" rel="stylesheet">
    <!-- fuentes -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
   <?php include('navegacion.php');?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Cabecera-->
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-lg-12">
                        <h3 class="page-header">
                            <small><img src="images/logo.png"></small><B>  Administracion de Biblioteca</B> </h3>
                    </div>
                </div>
                <!-- /.inicio de fila row-->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Mensajes</div>
                                        <div>Mensajes y comentarios</div>
                                        Todos : 
                                        <B> <?php  echo $contados2;?></B>
                                    </div>
                                </div>
                            </div>
                            <a href="comentarios.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Mensajes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                         <i class="fa fa-mobile fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Libros</div>
                                        <div>Lista de Libros</div>
                                        Todos los Libros : 
                                        <B> <?php  echo $contados;?></B>
                                    </div>
                                </div>
                            </div>
                            <a href="libros.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Libros</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-male fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Proveedores</div>
                                        <div>Informacion Detallada</div>
                                        Todos los proveedores : 
                                        <B> <?php  echo $contados3;?></B>
                                    </div>
                                </div>
                            </div>
                            <a href="proveedores.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Proveedores</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                
                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Estudiantes</div>
                                        <div>Listado de Estudiantes</div>
                                          Todos los Estudiantes : 
                                        <B> <?php echo $contados6;?></B>
                                    </div>
                                </div>
                            </div>
                            <a href="estudiantes.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Estudiantes</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-user fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Bibliotecarios</div>
                                        <div>Usuarios del Sistema</div>
                                          Total : 
                                        <B> <?php  echo $contados5;?></B>
                                    </div>
                                </div>
                            </div>
                            <a href="usuarios.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Empleados</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-globe fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Visitas</div>
                                        <div>Monitorear las Visitas</div>
                                        Total:
                                       <B> <?php  echo $tvisitas;?></B>
                                    </div>
                                </div>
                            </div>
                            <a href="visitas.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Ver Visitas</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                      <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-database fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">Base de Datos</div>
                                        <div>Backups y Restauracion</div>
                                    </div>
                                </div>
                            </div>
                            <a href="copiaSeguridad.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Gestionar la BD</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                   
                </div>
                <!-- /.row o fila -->
            </div>
            <!-- /.contenedor -->
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>
<?php
}else{
    echo '<script> window.location="../login/login.php"; </script>';
}
?>
