<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ucorpa-Multipurpose_Corporate
 */

?>


<!-- Footer Area -->
<footer class="footer">
    <!-- Footer Top -->
    <div class="footer-top ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="newslatter">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="newslatter-content">
                                    <h2>Sign up for our newslatter</h2>
                                    <p>Join over 5,000 people who get free.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="newslatter-form">
                                    <form class="form">
                                        <input type="email" placeholder="Enter your email">
                                        <button type="submit">Signup</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Single Widget -->
                    <div class="single-footer f-about">
                        <div class="logo">
                            <a href="index-2.html"><img src="img/logo2.png" alt="#"></a>
                        </div>
                        <p class="text">Are you looking for professional  your new business. Are you looking for professional  advice for your new business Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#">Read More</a>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-md-2 col-sm-6 col-xs-12">
                    <!-- Single Widget -->
                    <div class="single-footer f-link">
                        <h3>Our Services</h3>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- Single Widget -->
                    <div class="single-footer latest-news">
                        <h3>Recent News</h3>
                        <div class="single-news">
                            <img src="img/blog/blog1.jpg" alt="#">
                            <h4><a href="#">We have annnocuced our new product.</a></h4>
                            <span class="date"><i class="far fa-clock"></i> 25 Sep 2018</span>
                        </div>
                        <div class="single-news">
                            <img src="img/blog/blog2.jpg" alt="#">
                            <h4><a href="#">Top five way for learning web development.</a></h4>
                            <span class="date"><i class="far fa-clock"></i> 05 Sep 2018</span>
                        </div>
                        <div class="single-news">
                            <img src="img/blog/blog3.jpg" alt="#">
                            <h4><a href="#">We provide highly business.</a></h4>
                            <span class="date"><i class="far fa-clock"></i> 10 Aug 2018</span>
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <!-- Single Widget -->
                    <div class="single-footer f-contact">
                        <div class="contact-main">
                            <h3>Get In Tuch</h3>
                            <!-- Single Contact -->
                            <div class="single-contact">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Bizxpert Consult 45 Grand Central Terminal New York.</p>
                            </div>
                            <!-- Single Contact -->
                            <div class="single-contact">
                                <i class="fas fa-phone"></i>
                                <p>+00123654789</p>
                            </div>
                            <!-- Single Contact -->
                            <div class="single-contact">
                                <i class="far fa-envelope-open"></i>
                                <p><a href="mailto:info@yourwebsite">info@yourwebsite.com</a></p>
                            </div>
                        </div>
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <!-- End Social -->
                    </div>
                    <!-- End Single Widget -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright-content">
                        <?php echo cs_get_option('f_copyright');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Copyright -->
</footer>
<!-- End Footer Area -->
<?php wp_footer();?>
</body>
</html>