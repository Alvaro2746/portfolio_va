<?php
$email = "ejemplo@correo.com";
$subject = "Asunto del correo";
$body = "Cuerpo del mensaje";
?>

<?php $pag="contact";?>

<!DOCTYPE html>
<html lang="es" class="h-100">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
</head>
<body class="d-flex flex-column h-100">
    <header>
       <?php include_once("menu.php") ?>
   </header>
   <main class="container">
        
            <div  class="row">
                <div class="col-12 py-4">
                    <h1>contact</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                   <p>Contact me or date a meeting with me using one of the followin options.</p> 
                   
                   <div class="container_contact">
                        <div class="circle whatsapp">
                            <a href="https://api.whatsapp.com/send?phone=573184559655" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </div>
                        <div class="circle email">
                            <i class="fas fa-envelope"></i>

                        </div>
                        <div class="circle zoom">
                            <i class="fas fa-video"></i>
                        </div>
                        <div class="circle linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </div>
                    

                </div>
                <div  class="col-12 col-sm-6">
                    <form action="" method="post" >
                        <div class="my-3">
                            <input type="text" name="txtName" id="txtName" required class="form-control" placeholder="Name">
                        </div>
                        <div class="my-3">
                            <input type="email" name="txtEmail" id="txtEmail" required class="form-control " placeholder="Email">
                        </div>
                        <div class="my-3">
                            <input type="number" name="txtPhone" id="txtPhone" required class="form-control " placeholder="Phone">
                        </div>
                        <div class="my-3">
                            <textarea name="txtMen" id="txtMen" rows="4" required class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div id="send">
                        <a href="mailto:<?php echo $email; ?>?subject=<?php echo $subject; ?>&body=<?php echo $body; ?>"><p>alvaroviyareal@gmail.com</p></a>

                            <button id="send" type="submit" class="mx-9 form-control">Send</button>
                        </div>
                    </form>
                </div>
            
        
   </main>
   <?php include_once("footer.php"); ?>

</body>

</html>