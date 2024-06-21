
<nav class="menu ">
            <div class="container ">
                <div class="row ">
                    <div id="nav" class="col-12 col-lg-9 ">
                            <div class="row conbox">
                                <div class="col-6 col-lg-3">
                                    <a class="men1 <?php echo $pag=="home"? "navbordermen1":""; ?>" href="index.php"><ul class="px-3 " ><span>Home</span><i id="mark"></i></ul></a>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <a class="men2 <?php echo $pag=="contact"? "navbordermen2":""; ?>" href="contact.php"><ul class="px-3 " ><span>Contact</span><i id="mark"></i></ul></a>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <a class="men3 <?php echo $pag=="projects"? "navbordermen3":""; ?>" href="projects.php"><ul class="px-3 "><span>Projects</span><i id="mark"></i></ul></a>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <a class="men4 <?php echo $pag=="about_me"? "navbordermen4":""; ?>" href="about_me.php"><ul class="px-3  " style="--clr:#1e9bff"><span>About me</span><i id="mark"></i></ul></a>
                                </div>

                            </div>

                    </div>
                    <div id="cv" class="col-12 col-lg-3 text-end" >
                        
                        <a id="" class="men1" target="_blank" href="https://www.canva.com/design/DAFZLvOSf-M/g30fdTkEtFSjhJ6wvCxO-w/edit?utm_content=DAFZLvOSf-M&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" role="button"><span>Download CV <i class="fa-solid fa-download"></i></span><i id="mark"></i></a>

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
