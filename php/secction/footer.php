<div class=".container_icons_new">
		<!-- (p>lorem)*20 (código a usar si tienes instalada la extensión emmet)-->
	</div>

	<div class="social_icons_news">
        
		<a href="<?php echo $Facebook  ?>" target="_blank"><img src="img/icons/facebook.png" alt="facebook"></a>
		<!-- <a href="<?php echo $Circle  ?>"><img src="img/icons/circle.png" alt="youtube"></a>
		<a href="<?php echo $ezlocal  ?>" target="_blank"><img src="img/icons/ezlocal.png" alt="linkedin"></a>
		<a href="<?php echo $yelp  ?>"><img src="img/icons/yelp.png" alt="instagram"></a>
        <a href="<?php echo $manta  ?>"><img src="img/icons/manta.png" alt="instagram"></a> -->
		
	</div>


<style>
	
*{box-sizing:border-box;}

.container_icons_new{
			width:95%;
			max-width:900px;
			padding:32px 64px;
			margin:auto;
			z-index: 2;
}

.social_icons_news{
			/*las imágenes usadas tienen width de 48px*/
			width:68px;
			position:fixed;
			top:30px;
			left: 0;
}

		/* Extra centrado vertical*/

.social_icons_news{
			/*border:1px solid #000;*/
			top:96%;
			height:205px;
			/*para poner height 192 deberíamos haber indicado en el reset de estilos font-size:0;*/
			margin-top: -40px;
			z-index: 2;
}
</style>
	


    
    
        <!-- Footer Area Start -->
        <div class="footer section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="widget contact_info">
                        <h2 class="widget-title">Get in Touch</h2> 
                        <div class="widget-content contact_list">
                            <!-- item -->
                            <div class="contact-widget-item d-inline-flex align-items-center">
                                <div class="contact-icon-widget">
                                </div>
                                <div class="contact-content-widget">
                                    <p><?php echo $Phone?></p>
                                </div>
                            </div>
                            <!-- item  -->
                            <div class="contact-widget-item d-inline-flex align-items-center">
                                <div class="contact-icon-widget">
                                </div>
                                <div class="contact-content-widget">
                                    <p><?php echo $Mail?></p>
                                </div>
                            </div>
                            <!-- item  -->
                            <div class="contact-widget-item d-inline-flex align-items-center">
                                <div class="contact-icon-widget"> </div>
                                <div class="contact-content-widget"><p><?php echo $Address?></p></div>
                            </div>
                            <div class="contact-widget-item d-inline-flex align-items-center">
                                <div class="contact-icon-widget"> </div>
                                <div class="contact-content-widget"><p><?php echo $Payment?></p></div>
                            </div>
                            <div class="contact-widget-item d-inline-flex align-items-center">
                                <div class="contact-icon-widget"> </div>
                                <div class="contact-content-widget"><p><?php echo $Experience?></p></div>
                            </div>
                            <div class="contact-widget-item d-inline-flex align-items-center">
                                <div class="contact-icon-widget"></div>
                                <div class="contact-content-widget"><p><?php echo $Cover?></p></div>
                            </div>
                            <div class="contact-widget-item d-inline-flex align-items-center">
                                <div class="contact-icon-widget"></div>
                                <div class="contact-content-widget"><p><?php echo $Schedule?></p></div>
                            </div>
                            <!-- item  -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 md-mb-30">
                    <div class="widget footer_menu">
                        <h2 class="widget-title">Quick Links</h2> 
                        <div class="footer-menu">
                            <ul>
                                <li><a href="about.php">About Company</a>
                                </li>
                                <li><a href="contact.php">Contact us</a>
                                </li>
                                <li><a href="gallery.php">Gallery</a>
                                </li>
                                <li><a href="services.php">Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-mb-30">
                    <div class="widget footer_menu two">
                        <h2 class="widget-title">Our Services</h2> 
                        <div class="footer-menu">
                            <ul>
                                <?php for($i = 1; $i <= 4; $i++) {?>
                                    <li><a href="services.php"><?php echo $SN[$i]?></a></li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget contact_info">
                        <h2 class="widget-title">Subscribe</h2> 
                        <div class="subscribe-form">
                            <p>Suspendisse congue fermentum fermentum pellentesque</p>
                            <div class="form-group">
                                <form class="subscribe-from">
                                    <input type="text" name="email" id="email-id" placeholder="Enter Email">
                                    <button type="submit" id="subscribe"> <i class="fas fa-location-arrow"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area End -->

    <!-- Footer Bottom Area End -->
    <!-- scroll_up_btn -->
    <div class="scroll-top"><i class="fas fa-long-arrow-alt-up"></i>
    </div>
    <!-- scroll_up_btn end -->
    <!-- Main JS -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Popper JS -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Carousel -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- WOW JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Mean menu -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!-- Waypoints -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- magnific -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Counterup -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/custom.js"></script>
</body>