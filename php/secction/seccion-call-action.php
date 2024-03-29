<style>
.clearfix {
clear: both;
}

#contact-cta-section {
padding-top: 37px;
padding-bottom: 40px;
font-family: "proxima-nova", sans-serif;
font-weight: 400;
-webkit-font-smoothing: antialiased;
text-rendering: optimizeLegibility;
-moz-osx-font-smoothing: grayscale;
padding: 75px 0 10px 0;
float: left;
width: 100%;
text-align: center; 
}

.wrapper-full {
  position: relative;
width: 100%;
margin: 0 auto;
}
.cta-wrapper {
margin-bottom: 0;
text-align: left;
padding: 58px;
background-color: #282828;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
-ms-border-radius: 3px;
-o-border-radius: 3px;
border-radius: 3px;
}
.cta-wrapper .details-wrapper {
float: left;
width: 60%;
}
.cta-wrapper .details-wrapper h2 {
font-weight: 600;
margin: 0 0 4px 0;
color: #FFF;
font-size: 27px;
}
.cta-wrapper .details-wrapper p {
font-size: 18px;
color: #FFF;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


.cta-wrapper .blue-cta-button {
padding: 17px 50px;
text-transform: uppercase;
background-color: #93CC76;
color: #000;
letter-spacing: 0.1em;
-webkit-border-radius: 3px;
-moz-border-radius: 3px;
-ms-border-radius: 3px;
-o-border-radius: 3px;
border-radius: 3px;
-webkit-transition: all 0.2s ease-in-out;
-moz-transition: all 0.2s ease-in-out;
-ms-transition: all 0.2s ease-in-out;
-o-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
text-decoration: none;
font-weight: 600;
display: inline-block;
white-space: pre;
margin: 31px 0 25px 0;  
float: right;
margin: 0;
color: #ffffff;
background-color: #12452d;
padding: 17px 0;
width: 40%;
text-align: center;
}



.Roger-r{
       color: #FFF;
       text-align: center;
}

















</style>

 






<section id="contact-cta-section" class="contact-cta-section">
  <div class="wrapper-full">
    <div class="cta-wrapper">
      <div class="details-wrapper">
        <h2>Interested in a quote for your roofing or remodeling project?</h2>
        <p>Use our online quote request form to provide details, and we'll prepare <br> a personalized quote for you.</p>
      </div>
      <a class="blue-cta-button" href="tel:<?php echo $Phone?>">Call Us Now!</a>
      <h2 class="Roger-r" ><?php echo $Phone?></h2>
      <div class="clearfix"></div>
    </div>
  </div>
</section>