<?php include('php/secction/header.php') ?>


    <!-- Page Title -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header-content">
						<h2>Contact Us</h2>
						<ul>
							<li><a href="#">Home</a>
							</li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- End Page Title -->


    <div class="contact-area section-padding">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-4 col-md-6 md-mb-30">
					<div class="contact-item">
						<ul class="d-inline-flex align-items-center">
							<li><i class="flaticon-call"></i>
							</li>
							<li>
								<h3>Call Us</h3> 
								<p><?php echo $Phone?></p>
								
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6 sm-mb-30">
					<div class="contact-item">
						<ul class="d-inline-flex align-items-center">
							<li><i class="flaticon-envelope"></i>
							</li>
							<li>
								<h3>Email Drop Us</h3> 
								<p><?php echo $Mail?></p>
								
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="contact-item">
						<ul class="d-inline-flex align-items-center">
							<li><i class="flaticon-pin"></i>
							</li>
							<li>
								<h3>Location</h3>
								<p><?php echo $Address?></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Contact Area End -->


    <!-- Get In touch Area Start -->
	<div class="get-in-touch section-padding pt-0">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-6 col-lg-6">
					<div class="form-left md-mb-40">
						<div class="get-in-touch-left section-title mb-15"> <span>\\ Get In touch</span>
							<h2>We are always Ready for your solution</h2>
							<p><?php echo $Contact[0]?></p>
						</div>
						<div class="follow-us">
							<h4 class="mb-20">Follow Us :</h4>
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-twitter"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-instagram"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6">
					<div class="form-right">
						<div class="form-title">
							<h3>Get in Touch with us</h3>
						</div>
						<div class="comment-form mt-40">
							<form class="form" action="#">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" name="name" placeholder="Your Name" required="required">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<input type="email" name="email" placeholder="Your Email" required="required">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<input type="email" name="subject" placeholder="Subject" required="required">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<textarea name="message" rows="3" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-lg-12">
										<button type="submit" class="theme-btn">Send Message</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Get In touch Area End -->
	<!-- Map Area Start -->
	<div class="contact-map">
		<?php echo $GoogleMap?>
	</div>
	<!-- Map Area End -->





    

<?php include('php/secction/footer.php') ?>
