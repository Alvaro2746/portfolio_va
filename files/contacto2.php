<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="../css/estilos2.css">

</head>
<body class="d-flex flex-column h-100">
    <header>
        <nav>
            <div class="container">
                <div class="row">
                    <div id="nav" class="col-12 col-sm-6 p-4">
                        <a href="index.html"><ul class="px-2">Inicio</ul></a>
                        <a href="sobre-mi.html"> <ul class="px-2">Sobre mi</ul></a>
                        <a href="proyectos.html"><ul class="px-2">Proyectos</ul></a>
                        <a href="contacto.html"><ul class="px-2" id="navborder">Contacto</ul></a>
                    </div>
                    <div id="cv" class="col-12 col-sm-6 p-4 " >
                        
                        <a id="txtbutton" class="btn btn-primary" target="_blank" href="https://www.canva.com/design/DAFZLvOSf-M/g30fdTkEtFSjhJ6wvCxO-w/edit?utm_content=DAFZLvOSf-M&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" role="button">Descargar CV <i id="download" class="fa-solid fa-download"></i></a>

                    </div>
                    
                </div>
                
            </div>
           
        </nav>
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
                        <div class="my-2">
                            <input type="text" name="txtName" id="txtName" required class="form-control" placeholder="Nombre">
                        </div>
                        <div class="my-21">
                            <input type="email" name="txtEmail" id="txtEmail" required class="form-control " placeholder="Email">
                        </div>
                        <div class="my-2">
                            <input type="number" name="txtPhone" id="txtPhone" required class="form-control " placeholder="Numero">
                        </div>
                        <div class="my-2">
                            <textarea name="txtMen" id="txtMen" rows="4" required class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                        <div >
                            <button id="send" type="submit" class="mt-2 mx-9 form-control">Enviar</button>
                        </div>
                    </form>
                </div>
            
        
   </main>
   <footer class="container mt-auto pb-4">
        
    <div class="row">
        <div id="i1" class="col-12 col-sm-4">
            <a href="https://github.com/" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/feed/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
        </div>
        <div  class="col-12 col-sm-4 ">
            <p id="i2" class="px-2 mt-5">Estudiante de DePC Suite</p>
            <p id="i3" class="px-2">alvaroviyareal@gmail.com</p>
        </div>
        
            
        
        <div id="i4" class="col-12 col-sm-4">
            <div id="fix">
                <a href="https://api.whatsapp.com/send?phone=573184559655" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

</footer>
</body>

</html>