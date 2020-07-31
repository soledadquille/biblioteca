
<?php
session_start();
include("conexion.php");
if(isset($_SESSION['user']))
 {?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Biblioteca UNI | Panel Administracion</title>
    <link rel="shortcut icon" href="../images/iconolibreria.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">  
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">
    <link href="admin_productos/css/estilo.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="comentarios/Mis_funciones.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
      <?php include('navegacion.php');?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">
                            <small><img src="images/logo.png"></small>Comentarios de los Visitantes
                        </h2>
                    </div>
                </div>
                <!-- /.row -->
                <div class='row'>   <!-- /.Inicia el primer row -->
                <table border="0" align="center">
                     <tr>
                        <td style="margin-rigth:20px;" width="200"><B> Buscar Comentarios: </B></td>
                        <td width="70%"><input type="text" style="border-radius:10px; padding-left:5px; heigth:25px; width:100%" placeholder="Busca un comentario" id="bs-prod"/></td>
                    </tr>
              </table>
        <br>
    <div class="registros" id="agrega-registros_comentarios"></div>
    <center>
        <ul class="pagination" id="pagination_comentarios"></ul>
    </center>
               </div>  <!-- /. fin de row -->
            </div>
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