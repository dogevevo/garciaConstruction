<?php include('php/secction/header.php') ?>


    <!-- Page Title -->
	<div class="page-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="page-header-content">
						<h2>Services</h2>
						<ul>
							<li><a href="#">Home</a>
							</li>
							<li>Services</li></ul>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- End Page Title -->


    <!-- Services Area Start -->
	<div class="services section-padding">
		<div class="container">
			<div class="row">
                <?php for ($i=1; $i <= 4; $i++) { ?> 
                    <div class="col-xl-4 col-md-6 mb-30">
                        <div class="service-item"> <i class="flaticon-maintenance"></i>
                            <h3><?php echo $SN[$i]?></h3>
                            <p> <?php echo $SD[$i]?> </p>
                        </div>
                    </div>
                <?php }?>
            </div>
		</div>
	</div>


<?php include('php/secction/footer.php') ?>
