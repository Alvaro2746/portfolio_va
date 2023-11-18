<?php $pagina="proyectos";?>

<!DOCTYPE html>
<html lang="es" class="h-100">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
</head>
<body class="d-flex flex-column h-100">
    <header>
    <?php include_once("menu.php"); ?>

   </header>
   <main class="container">
        
    <div  class="row">
        <div class="col-12 py-4">
            <h1>Proyectos</h1>
        </div>
        <div>
            <p>Los siguientes son algunos de los trabajos que he realizado</p>
        </div>
    </div>
    
    <div class="row">
        <div id="proyecto" class="col-12 col-md-4 p-3">
            <div class="p-3" id="pcont">
            <img src="../images/abmclientes.png" class="img-fluid" alt="ABM CLIENTES">
                <h2 class="p-2">ABM CLIENTES</h2>
            <p >Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
            <div id="pbotton" class="row">
                <div id="vo" class="col-6">
                    <a id="" class="btn btn-primary" href="#" role="button">Ver online</a>
                </div>
                <div id="cf" class="col-6">
                    <a href="">Codigo fuente</a>
                </div>
            </div>
        </div>
        </div>
        <div id="proyecto" class="col-12 col-md-4 p-3">
            <div class="p-3" id="pcont">
            <img src="../images/abmventas.png" class="img-fluid" alt="SISTEMA DE GESTIÓN DE VENTAS">
            <h2 class="p-2">SISTEMA DE GESTIÓN DE VENTAS</h2>

            <p>Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
            <div id="pbotton" class="row">
                <div id="vo" class="col-6">
                    <a id="" class="btn btn-primary" href="#" role="button">Ver online</a>
                </div>
                <div id="cf" class="col-6">
                    <a href="">Codigo fuente</a>
                </div>
            </div>
        </div>
    </div>
        <div id="proyecto" class="col-12 col-md-4 p-3">
            <div class="p-3" id="pcont">
            <img src="../images/proyecto-integrador.png" class="img-fluid" alt="PROYECTO INTEGRADOR">
            <h2 class="p-2">PROYECTO INTEGRADOR</h2>

            <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
            <div id="pbotton" class="row">
                <div id="vo" class="col-6">
                    <a id="" class="btn btn-primary" href="#" role="button">Ver online</a>
                </div>
                <div id="cf" class="col-6">
                    <a href="">Codigo fuente</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
   <footer class="container mt-auto pb-2 pt-5">
        
    <div class="row">
        <div id="i1" class="col-3">
            <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <div id="i2" class="col-3">
            <p>Student DePC Suite</p>
        </div>
        <div id="i3" class="col-3">
            <p>alvaroviyareal@gmail.com</p>
        </div>
        <div id="i4" class="col-3">
            <div id="fix">
                <a href="https://api.whatsapp.com/send?phone=573184559655" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

</footer>
</body>

</html>