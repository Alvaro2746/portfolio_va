<?php $pag="home";
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
</head>
<body class="d-flex flex-column h-100">
    <header>
    <?php include_once("menu.php"); ?>

   </header>
   <main class="container top">
        
    <div id="rocket" class="row">
        <div id="contcohe" class="col-12">
            <a href="projects.php"><img src="images/rocket.svg" alt="Rocket"></a>    
        </div>
        <div class="col-12 col-sm-6 my-4 mt-sm-5 text-center mb-3 offset-sm-3" id="sal">
            <p class="py-1">Welcome to my Website.</p>
        </div>
        <div>
            <a id="buttonp" class="btn btn-primary" href="projects.php" role="button">Check my projects</a>
        </div>
    </div>
</main>
<?php include_once("footer.php"); ?>

</body>

</html>