<?php include('php/secction/header.php')?>
<!-- Page Title -->
<section class="page-title text-center">
    <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-17.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Service Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.php">Home</a></li>
                <li>Service Details</li>
            </ul>
        </div>
    </div>
</section>
<!-- End Page Title -->


<?php 

if($SN[1]==true)
{
    $namepage="Services 1 ";
    

}
// elseif ($page_name=='about.php') {$namepage="About";}
// elseif ($page_name=='services.php') {$namepage="Services";}
// elseif ($page_name=='reviews.php') {$namepage="Reviews";}
// elseif ($page_name=='projects.php') {$namepage="Projects";}
// elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
// elseif ($page_name=='404.php') {$namepage="Not Found";}
// elseif ($page_name=='contact.php') {$namepage="Contact Us";}



?>


<!-- service-details -->
<section class="service-details pt_150 pb_120">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="service-details-content">
                    <div class="content-one">
                        <figure class="image-box"><img src="assets/images/resource/service-13.jpg" alt=""></figure>
                        <div class="text-box">
                            <h2>Equipment Install</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et enim justo, in mauris
                                posuere dolor. Dolor felis sapien sit egestas. Ut venenatis faucibus non sed faucibus
                                mauris ultricies. Cras varius proin amet vehicula magna. Ultricies gravida vel volutpat
                                sed. Platea sed fames at egestas amet feugiat laoreet sed potenti integer. Viverra at
                                maecenas convallis condimentum egestas nunc sagittis eu. Semper faucibus facilisis vitae
                                sollicitudin.</p>
                            <p>Fringilla mauris magna sit elementum elit. Facilisi lacus, pharetra quam eu urna amet
                                aenean. Nunc mattis vitae tellus bibendum a eu, nunc. Consequat commodo ac cursus in
                                donec orci tempus. Massa sed sit faucibus neque habitant consequat.</p>
                        </div>
                    </div>
                    <div class="content-two">
                        <div class="image-column">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure class="image-box"><img src="assets/images/resource/service-14.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                                    <figure class="image-box"><img src="assets/images/resource/service-15.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="text-box">
                            <h3>Benefits of Service</h3>
                            <p>Lorem ipsum dolor sit amet consectetur commodo est imperdiet proin accumsan at pharetra
                                varius commodo viverra risus id nibh tortor sit fringilla ut interdum augue gravida nam
                                nunc integer id in in aliquet natoque id ullamcorper libero facilisis eros vestibulum.
                            </p>
                            <ul class="list-item clearfix">
                                <li>Olympic Size Pool</li>
                                <li>Food & Drinks Service</li>
                                <li>Relax Atmosphere</li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-three">
                        <div class="text-box mb_55">
                            <h2>Our Solutions</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit duis et enim justo, in mauris
                                posuere dolor felis sapien sit egestas ut venenatis faucibus non sed faucibus mauris
                                ultricies cras varius proin amet vehicula magna ultricies gravida vel volutpat sed
                                platea sed fames at egestas amet feugiat laoreet sed potenti integer viverra at nunc cas
                                maecenas convallis condimentum egestas sagittis.</p>
                        </div>
                        <div class="accordion-inner">
                            <h3>We Help You with the Dedication</h3>
                            <ul class="accordion-box alt">
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="far fa-plus"></span> <span
                                                class="far fa-minus"></span></div>Support in environmental enrichment
                                        programs
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor sit amet consectetur. Consequat morbi
                                                hendrerit cursus nullam urna mauris nisl phasellus sollicitudin
                                                sollicitudin amet libero in accumsan urna interdum viverra et ultrices
                                                faucibus pulvinar fermentum.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-outer"><span class="far fa-plus"></span> <span
                                                class="far fa-minus"></span></div>Assisting the animals with the
                                        veterinarian
                                    </div>
                                    <div class="acc-content current">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor sit amet consectetur. Consequat morbi
                                                hendrerit cursus nullam urna mauris nisl phasellus sollicitudin
                                                sollicitudin amet libero in accumsan urna interdum viverra et ultrices
                                                faucibus pulvinar fermentum.</div>
                                        </div>
                                    </div>
                                </li>
                                <!--Block-->
                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-outer"><span class="far fa-plus"></span> <span
                                                class="far fa-minus"></span></div>Construction of natural structures for
                                        animals
                                    </div>
                                    <div class="acc-content">
                                        <div class="content">
                                            <div class="text">Lorem ipsum dolor sit amet consectetur. Consequat morbi
                                                hendrerit cursus nullam urna mauris nisl phasellus sollicitudin
                                                sollicitudin amet libero in accumsan urna interdum viverra et ultrices
                                                faucibus pulvinar fermentum.</div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="service-sidebar ml_40">
                    <div class="category-widget sidebar-widget">
                        <div class="widget-title">
                            <h3>All Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                <li><a href="service-detailsservices.php" class="current">Equipment Install</a></li>
                                <li><a href="service-details-2services.php">Commercial Pool</a></li>
                                <li><a href="service-details-3services.php">Water Analysis</a></li>
                                <li><a href="service-details-4services.php">Pool Maintenance</a></li>
                                <li><a href="service-details-5services.php">Drain & Clean</a></li>
                                <li><a href="service-details-6services.php">Pool Inspections</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="question-widget sidebar-widget">
                        <div class="widget-title">
                            <h3>Ask Question</h3>
                        </div>
                        <div class="form-inner">
                            <form action="contactservices.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="e-mail address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" placeholder="Your message"></textarea>
                                </div>
                                <div class="form-group message-btn">
                                    <button type="button" class="btn-1">Send Message<span></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="contact-widget">
                        <h2>Do You Need <br />Any <span>Help?</span></h2>
                        <ul class="info-list clearfix">
                            <li>
                                <span>Call Us Now:</span>
                                <h3><i class="icon-2"></i><a href="tel:913336660021">(+91) 333 666 0021</a></h3>
                            </li>
                            <li>
                                <span>Talk To Us:</span>
                                <h3><i class="icon-59"></i><a href="mailto:example@info.com">example@info.com</a></h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-details end -->


<!-- newsletter -->
<section class="newsletter-1">
    <div class="auto-container">
        <div class="newsletter-1-bg">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h4 class="newsletter-1-title">Subscribe To Our Newsletter</h4>
                </div>
                <div class="col-lg-7">
                    <div class="newsletter-1-form">
                        <form>
                            <input type="email" placeholder="e-mail address">
                            <button class="btn-1">Subscribe Now <span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('php/secction/footer.php')?>