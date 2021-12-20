<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<?php $titleSite ="Mi perfil de usuario"?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Erickson Espejo" />
    <title>Administración sistema de visitas municipalidad distrital de Aquia</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="../node_modules/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="../node_modules/@fortawesome/fontawesome-free/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include_once 'navegacion.php'; ?>
    <div id="layoutSidenav">
        <?php include_once 'sidebarnav.php'; ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Mi perfil</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Bienvenid@: <?php echo $nombre; ?></li>
                    </ol>
                                        
                    <div class="card mb-4">
                        <div id="usuario">Nombre de usuario</div>
                    </div>
                    <div class="card mb-4">
                        <div id="usuario">Correo Electronico</div>
                    </div>
                    <div class="card mb-4">
                        <div id="usuario">Empresa</div>
                    </div>
                    <div class="card mb-4">
                        <h4>Redes Sociales:</h4>
                    </div>
                    <div class="card mb-4">
                        <div id="usuario">Facebook:</div>
                    </div>
                    <div class="card mb-4">
                        <div id="usuario">Twitter:</div>
                    </div>
                    <div class="card mb-4">
                        <div id="usuario">Linkedin:</div>
                    </div>
                </div>
            </main>
            <?php
                include_once 'footer.php';
            ?>
            <?php 
}else{
     header("Location: ../index.php");
     exit();
}
 ?>