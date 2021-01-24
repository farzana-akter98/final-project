<section class="footer-area pt-100 section-title">
    <div class="footer">
        <div class="container">
            <div class="about-part col-md-3">
                <h2>about reizen</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="mtb-10">
                <ul> 
                    <li><a href=""><i class="fab fa-facebook"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                </ul>
                </div>
            </div>
            <div class="service-list col-md-3">
                <h2>quick links</h2>
                <div class="mtb-10">
                <ul>
                    <li><i class="fas fa-caret-right"></i><a href="">hotels</a></li>
                    <li><i class="fas fa-caret-right"></i><a href="">restaurents</a></li>
                    <li><i class="fas fa-caret-right"></i><a href="">tourist places</a></li>
                    <li><i class="fas fa-caret-right"></i><a href="">transport cost</a></li>
                    <li><i class="fas fa-caret-right"></i><a href="">shoping malls</a></li>
                    <li><i class="fas fa-caret-right"></i><a href="">grocery shops</a></li>
                    <li><i class="fas fa-caret-right"></i><a href="">emergency contacts</a></li>
                    <li><i class="fas fa-caret-right"></i><a href="">famous cloth</a></li>
                    <li><i class="fas fa-caret-right"></i><a href="">traditional food</a></li>
                </ul>
                </div>
            </div>
            <div class="webname col-md-3">
                <div class="circle">
                    <h2>reizen</h2>
                </div>
            </div>
            <div class="contact-part col-md-3">
                <h2>our contact</h2>
                <div class="contact-content mtb-10 pb-50">
                    <div class="contact-phone p-10 row">
                        <a href="">
                            <i class="fas fa-phone-alt"></i><span>+123456789</span>
                        </a>
                    </div>
                    <div class="contact-email p-10 row">
                        <a href=">"    
                            <i class="fas fa-envelope"></i><span>info@reizen.com</span>
                        </a>
                    </div>
                    <div class="contact-address p-10 row">
                        <a href="">
                            <i class="fas fa-map-marked-alt"></i><span>zindabazar,sylhet</span> 
                        </a>
                    </div>
                    <div class="contact-website p-10 row">
                        <a href="">
                            <i class="fas fa-globe"></i><span>www.reizen.com</span>
                        </a>
                    </div>
                </div>
                <a href="" class="contact-btn p-10" onclick="popupToggle()"><span>Make an inquiry!</span></a>
                <div id="popup">
                    <div class="contact-info">
                        
                        <h2>ask the quest</h2>
                        <form>
                            <div class="form-row">
                              <div class="form-group pt-10">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name">
                              </div>
                              <div class="form-group pb-10">
                                <label for="inputPassword4">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name">
                              </div>
                            </div>
                            <div class="form-group pb-10">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group pb-10">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                            <div class="form-group pb-10">
                                <label for="exampleFormControlTextarea1">Write your query...</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                          </form>
                          <a href="" class="close-popup" onclick="popupToggle()">&times;</a>
                    </div>
                </div>
                <script>
                    function popupToggle(){
                        const popup=document.getElementById('popup');
                        popup.classList.toggle('active')
                    }
                </script>
            </div>
        </div>
    <div class="footer-p"><p> &copy; 2020 all rights reserved for reizen</p></div>
</section>