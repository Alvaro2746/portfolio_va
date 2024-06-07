
<nav class="menu">
            <div class="container">
                <div class="row">
                    <div id="nav" class="col-12 col-sm-6 ">
                        <a href="index.php"><ul class="px-3" <?php echo $pag=="home"? "id='navborder'":""; ?>>Home</ul></a>
                        <a href="about_me.php" <?php echo $pag=="about_me"? "id='navborder'":""; ?>> <ul class="px-3">About me</ul></a>
                        <a href="projects.php" <?php echo $pag=="projects"? "id='navborder'":""; ?>><ul class="px-3">Projects</ul></a>
                        <a href="contact.php" <?php echo $pag=="contact"? "id='navborder'":""; ?>><ul class="px-3" >Contact</ul></a>
                    </div>
                    <div id="cv" class="col-12 col-sm-6 " >
                        
                        <a id="txtbutton" class="btn btn-primary" target="_blank" href="https://www.canva.com/design/DAFZLvOSf-M/g30fdTkEtFSjhJ6wvCxO-w/edit?utm_content=DAFZLvOSf-M&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" role="button">Download CV <i id="download" class="fa-solid fa-download"></i></a>

                    </div>  
                </div>
            </div>
        </nav>  
        <script type="text/javascript">
            window-addEventListener("scroll", function(){
                var header = document.querySelector("header");
                header.classList.toggle("down", window.scrollY>0);
            })
        </script>
