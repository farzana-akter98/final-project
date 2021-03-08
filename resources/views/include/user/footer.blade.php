<section class="footer-area pt-50">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="about-part">
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
            </div>
            <div class="col-md-3">
                <div class="service-list">
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
            </div>
            <div class="col-md-3">
                <div class="webname">
                    <div class="circle">
                        <h2>reizen</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact-part">
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
                    
                    {{-- <div class="modal" id="popup">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="contact-info">  
                                
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
                                    <a href="" class="close-popup">&times;</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <button id="show-modal" class="btn contact-btn"><span>Make an inquiry!</span></button>
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="h-pink">ask the quest</h5>
                                <button id="close-modal" class="close close-popup"><span>&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form>
                                                <div class="form-row">
                                                    <div class="form-group pt-10">
                                                    <label class="h-pink" for="inputEmail4">First Name</label>
                                                    <input type="text" class="form-control" placeholder="First Name">
                                                    </div>
                                                    <div class="form-group pb-10">
                                                    <label class="h-pink" for="inputPassword4">Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="form-group pb-10">
                                                    <label class="h-pink" for="inputEmail4">Email</label>
                                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                                </div>
                                                <div class="form-group pb-10">
                                                    <label class="h-pink" for="inputPassword4">Password</label>
                                                    <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                                                </div>
                                                <div class="form-group pb-10">
                                                    <label class="h-pink" for="exampleFormControlTextarea1">Write your query...</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                    </div>
                                                <button type="submit" class="btn btn-common">Send</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-p"><p> &copy; 2020 all rights reserved for reizen</p></div>
    <script>
        $(function(){
            $('#show-modal').click(function(){
                $('#myModal').modal('show');
            })
            $('#close-modal').click(function(){
                $('#myModal').modal('hide');
            })
        });
    </script>
</section>