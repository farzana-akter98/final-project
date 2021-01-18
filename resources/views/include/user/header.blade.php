<!--top area-->
<section class="top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top-contact">
                    <a href="mailto:info@reizen.com"><i class="far fa-envelope"></i>info@reizen.com</a>
                    <a href="tel:1234567890"><i class="fas fa-phone-alt"></i> 1234567890</a>
                 </div>  
            </div>
            <div class="col-md-6">
                <button type="button" class="login-btn">Login</button>             
            </div>

        </div>
    </div>
</section>
<!--header area-->
<header class="header-area">
    <div class="container">
        <div class="header row">
                <div class="logo col-md-3">
                    <a href="">Reizen</a>
                </div> 
                <div class="navigation col-md-9 text-right">
                    <a href="" id="search-btn"><i class="fas fa-search"></i></a>
                        <div id="myNav" class="overlay">
    
                            <!-- Button to close the overlay navigation -->
                            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                          
                            <!-- Overlay content -->
                            <div class="overlay-content">
                              <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="">places to visit</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                              </ul>>
                            </div>
                          
                        </div>
                        <script>
                            function openNav() {
                              document.getElementById("myNav").style.width = "100%";
                            }
                            
                            function closeNav() {
                              document.getElementById("myNav").style.width = "0%";
                            }
                        </script>
                         <span style="font-size:30px;cursor:pointer;" onclick="openNav()">☰</span>
                </div>
      </div>
    </div>           
</header>
<script type="text/javascript">
    window.addEventListener("scroll",function() {
        var header=document.querySelector('header');
        header.classList.toggle("sticky", window.scrollY > 0);
    })
</script>