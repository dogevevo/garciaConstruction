<?php
$full_name = $_SERVER['PHP_SELF'];$name_array = explode('/',$full_name);$count = count($name_array);$page_name = $name_array[$count-1];
if($page_name=='index.php'){$namepage="Home";}
elseif ($page_name=='about.php') {$namepage="About";}
elseif ($page_name=='services.php') {$namepage="Services";}
elseif ($page_name=='reviews.php') {$namepage="Reviews";}
elseif ($page_name=='projects.php') {$namepage="Projects";}
elseif ($page_name=='thank-you.php') {$namepage="Thank You";}
elseif ($page_name=='404.php') {$namepage="Not Found";}
elseif ($page_name=='contact.php') {$namepage="Contact Us";}
//Info
	$Company="Garcia construction";
	$Domain='Garciaconstructionla.com';//No dejar pleca al final del dominio
	$Address='507 Louise st Houma La 70363';

	$PhoneName="";
	$Phone='(985) 226-8269';
	$Phone2='';
	$PhoneConvert = str_replace(str_split('(-)/:*?"<>|\t\n\r\O\f\i\c\e'), '', $Phone);
	$PhoneRef = "tel:".str_replace(str_split(' '), '', $PhoneConvert);

	$SEOConvert= str_replace(str_split(' '), '-', $PhoneConvert);
	$SEOPhone='+1'.$SEOConvert;

	$Mail='gedbin7@yahoo.com';$MailRef="mailto:".$Mail;
	$Services="";
	$Estimates="";
	$Payment="cash, tarjeta, zelle...";
	$Experience="17 Years Of Experience";
	$Schedule="Mon - Sun: 8:00am - 6:00pm";
	$Schedule2="";
	$Cover="40 Miles Around ";


	// URLS 
	$Facebook="";
	$GoogleMap='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3469.383994354747!2d-90.70737102500703!3d29.592521639842158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x862104cfc9178917%3A0x73c910cb38029e5a!2s507%20Louise%20St%2C%20Houma%2C%20LA%2070363%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sni!4v1709828506252!5m2!1ses-419!2sni" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
	$Url_Map = 'https://maps.app.goo.gl/5hTNDf4TMtLnTy9t7';
	// $Business = 'https://g.page/r/CW3YSIMU9z-rEB0';
	// $yelp = 'https://www.yelp.com/biz/leons-painting-and-remodeling-indianapolis';
	// $Circle = 'https://www.merchantcircle.com/leon-s-painting-and-remodeling-indianapolis-in';
	// $ezlocal = 'https://ezlocal.com/in/indianapolis/general-contractor/0917976906';
	// $manta = 'https://www.manta.com/c/m1w1ldg/leon-s-painting-and-remodeling';

		
//Phrases
	$Description="Welcome to $Company";	
 	$Phrase = array(	
		"",
		"",
		"",
		"",
	);

	$sliderText = array (
		"$Schedule",
		"$Company",
		"$Payment",
	);

	//Home  etc.
	$Choose = array(		 
		"",
		"",
		"",
		"",
		"",
	);


	$About = array(
		"$Description",
		"",
		);

	$AboutText = array (
		"At $Company, we pride ourselves on being a trusted leader in the construction industry. With years of experience and a dedication to excellence, we are committed to delivering top-quality construction solutions for our clients.",
		"Founded on principles of integrity, quality, and innovation, $Company has established itself as a premier construction company. Our team of skilled professionals brings a wealth of knowledge and expertise to every project, ensuring exceptional results and customer satisfaction.",
		"",
		"",
		"",
	);

	$Contact = array (
		"At $Company, we are passionate about construction and dedicated to turning our clients' visions into reality. Contact us today to learn more about our services and how we can help you with your next construction project.",
	); 	




	//Services
	$SN[1]="Remodeling";
	$SD[1]="Whether you're looking to update a single room or renovate your entire property, our remodeling services can turn your ideas into reality. From design concept to final execution, our team will work closely with you to create a space that reflects your unique style and meets your needs.";
	
	$SN[2]="Painting";
	$SD[2]="Enhance the aesthetic appeal and value of your property with our professional painting services. Whether it's a residential home or commercial building, our skilled painters will deliver flawless results that breathe new life into your space.";

	$SN[3]="Power Washing";
	$SD[3]="Restore the beauty of your exterior surfaces with our power washing services. From siding and decks to driveways and sidewalks, we use high-powered equipment and environmentally friendly solutions to remove dirt, grime, and stains, leaving your property looking fresh and clean.";
	
	$SN[4]="Framing";
	$SD[4]="The foundation of any construction project, framing sets the stage for the entire structure. Our framing services ensure precision and durability, providing a solid framework for your project that meets or exceeds industry standards.";	
	


	$ServicesText = array (
		"",
		"",
		"",
		"",
	);

	$servicesTittle = array ( 
		"",
		""
	);

	$Detail = array(		 
		"",
	);


	
//Excerpt
	// if (strlen($Description) > 10){$ExDescription=substr($Description, 0,152).'...';};
	// if (strlen($About[0]) > 10){$ExAbout=substr($About[0], 0,145).'...';};
	//if (strlen($Home[0]) > 10){$ExHome=substr($Home[0], 0,87).'...';};

	// if (strlen($SD[1]) > 10){$ExSD[1]=substr($SD[1], 0,100).'...';};
	// if (strlen($SD[2]) > 10){$ExSD[2]=substr($SD[2], 0,96).'...';};
	// if (strlen($SD[3]) > 10){$ExSD[3]=substr($SD[3], 0,82).'...';};
	//if (strlen($SD[5]) > 10){$ExSD[4]=substr($SD[4], 0,108).'...';};

?>
