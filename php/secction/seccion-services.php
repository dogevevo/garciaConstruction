 <!-- Services Area Start -->
 <div class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title algin-center"> <span>//  Services</span>
                        <h2>We Provide reliable
                            Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php for ($i=1; $i <= 6; $i++) { ?> 
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
    <!-- Services Area End -->