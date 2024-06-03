<?php $pag="projects";?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projects</title>
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
</head>

<body class="d-flex flex-column h-100">
    <header>
        <?php include_once("menu.php"); ?>

    </header>
    <main class="container">

    <div class="row">
    <div class="col-12 py-4">
        <h1>Projects</h1>
    </div>
    <div>
        <p>The following are some of the works I have done</p>
    </div>
</div>


<div class="row">
    <div id="proyecto" class="col-12 col-md-4 p-3">
        <div class="p-3" id="pcont">
            <div id="divimg">
                <img src="../images/abmclientes.png" class="img-fluid" alt="ABM CLIENTES">
            </div>
            <div id="divh2">
                <h2 class="p-2">CLIENT MANAGEMENT</h2>
            </div>
            <div id="divp">
                <p>Addition, deletion, and modification of client records. Made with HTML, CSS, PHP, Bootstrap, and JSON.</p>
            </div>
            <div id="pbotton" class="row">
                <div id="vo" class="col-6">
                    <a id="" class="btn btn-primary" target="_blank" href="../projects/client_management" role="button">View online</a>
                </div>
                <div id="cf" class="col-6">
                    <a target="blank" href="https://github.com/Alvaro2746/ABMClientes">Source code</a>
                </div>
            </div>
        </div>
    </div>
    <div id="proyecto" class="col-12 col-md-4 p-3">
        <div class="p-3" id="pcont">
            <img src="../images/abmventas.png" class="img-fluid" alt="SALES MANAGEMENT SYSTEM">
            <h2 class="p-2">SALES MANAGEMENT SYSTEM</h2>
            <div>
                <p>System for managing clients, products, and sales. Made with HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax, jQuery, and MySQL database. <br><br>
                Please sign in using this provisional credentials:<br>
                User: test<br>
                Pass: test
                </p>
            </div>
            <div id="pbotton" class="row">
                <div id="vo" class="col-6">
                    <a id="" class="btn btn-primary" target="_blank" href="../projects/sales_management_system/login.php" role="button">View online</a>
                </div>
                <div id="cf" class="col-6">
                    <a href="" target="_blank">Source code</a>
                </div>
            </div>
        </div>
    </div>
    <div id="proyecto" class="col-12 col-md-4 p-3">
    <div class="p-3" id="pcont">
        <img src="../images/task.png" class="img-fluid" alt="TASK ORGANIZER">
        <h2 class="p-2">TASK ORGANIZER</h2>
        <p>Addition, deletion, and modification of tasks per user, urgency and status. Made with HTML, CSS, PHP, Bootstrap, and JSON.</p>
        <div id="pbotton" class="row">
            <div id="vo" class="col-6">
                <a id="" class="btn btn-primary" target="_blank" href="../projects/task_organizer" role="button">View online</a>
            </div>
            <div id="cf" class="col-6">
                <a href="">Source code</a>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div id="proyecto" class="col-12 col-md-4 p-3">
    <div class="p-3" id="pcont">
        <img src="../images/cv_picture.png" class="img-fluid" alt="CV Website">
        <h2 class="p-2">CV Website</h2>
        <p>Full Stack project developed in PHP to showcase my skills, education and experience graphically, allowing contact with new clients and showing all my projects and social network.</p>
        <div id="pbotton" class="row">
            <div id="vo" class="col-6">
                <a id="" class="btn btn-primary" target="_blank" href="index.php" role="button">View online</a>
            </div>
            <div id="cf" class="col-6">
                <a href="">Source code</a>
            </div>
        </div>
    </div>
</div>
</div>


    </main>
    <?php include_once("footer.php"); ?>

</body>

</html>