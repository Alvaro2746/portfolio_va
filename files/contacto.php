<?php $pagina="contacto";?>

<!DOCTYPE html>
<html lang="es" class="h-100">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
</head>
<body class="d-flex flex-column h-100">
    <header>
       <?php include_once("menu.php") ?>
   </header>
   <main class="container">
        
            <div  class="row">
                <div class="col-12 py-4">
                    <h1>Contacto</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                   <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p> 
                </div>
                <div  class="col-12 col-sm-6">
                    <form action="" method="post" >
                        <div class="my-3">
                            <input type="text" name="txtName" id="txtName" required class="form-control" placeholder="Nombre">
                        </div>
                        <div class="my-3">
                            <input type="email" name="txtEmail" id="txtEmail" required class="form-control " placeholder="Email">
                        </div>
                        <div class="my-3">
                            <input type="number" name="txtPhone" id="txtPhone" required class="form-control " placeholder="Numero">
                        </div>
                        <div class="my-3">
                            <textarea name="txtMen" id="txtMen" rows="4" required class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                        <div id="Enviar">
                            <button id="send" type="submit" class="mx-9 form-control">Enviar</button>
                        </div>
                    </form>
                </div>
            
        
   </main>
   <?php include_once("footer.php"); ?>

</body>

</html>