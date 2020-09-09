<!-- footer-section start -->
<section class="footer-section">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <p>the buisness
                        <br> inn Abudhabi, st Street 12,154069 Avenue</p>
                </div>
             
                <?php
                wp_nav_menu([
                    'theme_location' => 'social',
                    // 'container'          => '',
                    // 'items_wrap'         => '<div class="social-icons mb-3">%3$s</div>'
                    // 'container' => '',
                    // 'items_wrap' => '
                    // <div class="social-icons mb-3">%3$s</div>',
                    'items_wrap' => '
                    <ul class="header-nav__social">%3$s</ul>',


                ]);
                ?>
                
                    <div class="social-icons mb-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i><a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
      
                <a href="#"> <?php the_custom_logo() ?></a>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <p class="copy-right">All rights reserved. the buisness inn company © 2020</p>
                <div class="privacy">
                    <a href="html/Term of service.html">Term of service</a>
                    <a href="html/Privacy Policy.html">Privacy Policy</a>
                </div>
            </div>

    </footer>
    <!-- footer-section end -->


    <!-- join now model -->
    <div class="modal fade" id="joinNow-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <scetion class="contact-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-sm-6">
                                <div class="contact-info px-3">
                                    <h5 class="contact-title">The buisness inn company</h5>
                                    <div class="social-icons mb-3">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod, Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod,Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                        sed diam nonumy eirmod, Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod, Lorem ipsum dolor sit amet, consetetur sadipscing
                                    </p>
                                    <p>Address: Abudhabi
                                        <br>Phone: 11236 5898
                                        <br>Fax: 11236 5898
                                        <br>Email: info@buisnessinn.com
                                    </p>

                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="contact-form">
                                    <p>Welcome, You're just a moments away from becoming a part of the buisness inn</p>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="fullname" aria-describedby="emailHelp" placeholder="Full name">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="date" aria-describedby="emailHelp" placeholder="Birth date">
                                        </div>

                                        <button type="submit" class="btn join-btn">Send</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </scetion>
            </div>
        </div>
    </div>
    <!-- raing modal -->
    <div class="modal fade" id="rating-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <scetion class="contact-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-md-8">
                                <div class="contact-form">
                                    <div class="reviews">
                                        <span class="checked"><i class="far fa-star"></i></span>
                                        <span class="checked"><i class="far fa-star"></i></span>
                                        <span class="checked"><i class="far fa-star"></i></span>
                                        <span class="checked"><i class="far fa-star"></i></span>
                                        <span class=""><i class="far fa-star"></i></span>
                                    </div>
                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="text-review" id="text-review" cols="30" rows="10" placeholder="Your review"></textarea>
                                        </div>
                                        <button type="submit" class="btn join-btn">Send</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </scetion>
            </div>
        </div>
    </div>

    <?php wp_footer() ?>
</body>
</html>