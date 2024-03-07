<?php include('php/secction/header.php') ?>

    <div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header-content">
						<h2>Our Best Work</h2>
						<ul>
							<li><a href="#">Home</a>
							</li>
							<li>Work</li>                                
                        </ul>
					</div>
				</div>
			</div>
		</div>
	</div>




    <!-- seccion gallery -->


    <div class="our-work section-padding">
		<div class="container">
			<div class="row">
				<?php for ($i=1; $i < 6; $i++) { ?>
				<div class="col-xl-4 col-md-6 mb-30">
					<div class="work-item">
						<img src="assets/img/1.jpg" alt="">
						<div class="work-overly">
							<h3><a href="work-details.html">Infrastructure</a></h3>
							<p>Infrastructure Building</p>	
							<div class="overlay-plus">
							    <a class="img-popup" href="assets/img/1.jpg">
							    	<i class="flaticon-plus"></i>
							    </a>		
							</div>
						</div>
					</div>
				</div>
			 	<?php }?>
				
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="button-work text-center mt-20">
						<a class="theme-btn" href="work-details.html">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Work Area End -->

<?php // include('php/secction/seccion-partner.php'); ?>
<?php include('php/secction/footer.php') ?>