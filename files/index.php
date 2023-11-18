<?php $pagina="inicio";?>

<!DOCTYPE html>
<html lang="es" class="h-100">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
</head>
<body class="d-flex flex-column h-100">
    <header>
    <?php include_once("menu.php"); ?>

   </header>
   <main class="container">
        
    <div id="cohete" class="row">
        <div id="contcohe" class="col-12">
            <a href="proyectos.html"><img src="../images/cohete.svg" alt="Cohete"></a>    
        </div>
        <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center mb-3 offset-sm-3" id="sal">
            <p class="py-1">Bienvenid@ a mi sitio web.</p>
        </div>
        <div>
            <a id="buttonp" class="btn btn-primary" href="proyectos.html" role="button">Conoce mis Proyectos</a>
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