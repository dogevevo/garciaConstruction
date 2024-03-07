<!-- Work Area Start -->
    <div class="our-work section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title algin-center"> <span>//  Photos Gallery</span>
                        <h2>Our Recent Work</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-work section-padding">
		<div class="container">
			<div class="row">
				<?php for ($i=1; $i < 7; $i++) { ?>
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="work-item">
                            <img src="assets/img/<?php echo $i?>.jpg" alt="">
                            <div class="work-overly">
                                <h3><a href="work-details.html">Infrastructure</a></h3>
                                <p>Infrastructure Building</p>	
                                <div class="overlay-plus">
                                    <a class="img-popup" href="assets/img/<?php echo $i?>.jpg">
                                        <i class="flaticon-plus"></i>
                                    </a>		
                                </div>
                            </div>
                        </div>
                    </div>
			 	<?php }?>
			</div>
        </div>
    </div>
    <!-- Work Area End -->