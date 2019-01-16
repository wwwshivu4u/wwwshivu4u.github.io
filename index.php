<?php
error_reporting(0);
$echo="";
include "db_conx.php";
$sql = "SELECT * FROM portf";
$query= mysqli_query($db_conx, $sql);
$existCount = mysqli_num_rows($query);
if ($existCount > 0) {
    while($row = mysqli_fetch_array($query)){ 
    	$itEYEd = $row["itID"];
        $nam = $row["itName"];
        $cat = $row["itCate"];
        $link = $row["itLink"];
        $linkexp = explode(";", $link);
        if(count($linkexp) < 3){
        	$echo .='<li>
					<div class="inner" >
						<img src="'.$linkexp[0].'" alt="'.$nam.'">
						<a href="project.php?itemId='.$itEYEd.'" class="overlay" >
							<h4>'.$nam.'</h4>
							<span>'.$cat.'</span>
						</a>
					</div>
				</li>';

        }else{
        	$echo .='<li>
					<div class="inner" >
					<span id="mul"><i class="far fa-copy"></i></span>
						<img src="'.$linkexp[1].'" alt="'.$nam.'">
						<a href="project.php?itemId='.$itEYEd.'" class="overlay" >
							<h4>'.$nam.'</h4>
							<span>'.$cat.'</span>
						</a>
					</div>
				</li>';
        }
		

        
		
    }
    $echo .='<li>
    			<div class="inner" >
    				<img src="img/more.jpg" alt="more coming soon..">
    				<a href="#" class="overlay" onclick="return false;">
    					<h4>MORE</h4>
    					<span>coming soon.....</span>
    				</a>
    			</div>
    		</li>';
}
else{
    $echo="<h4 class='ellipsis'>No items listed so far!</h4>";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Hello, welcome to my website and my resume, I was sick of the old fashioned paper style, so this!">
		<meta name="author" content="Shivam Thakur">
	    <link rel="icon" href="img/ico/favicon.ico">

	    <link rel="author" href="https://plus.google.com/116104246292651231182" />
	    <link rel="canonical" href="http://shivamthakur.in" />

	    <!-- Schema.org markup for Google+ --> 
	    <meta itemprop="name" content="ShivamThakur.in"> 
	    <meta itemprop="description" content="Hello, welcome to my website and my resume, I was sick of the old fashioned paper style, so this!"> 
	    <meta itemprop="image" content="img/ico/favicon.ico">

	    <!-- Twitter Card data --> 
	    <meta name="twitter:card" content="ShivamThakur.in"> 
	    <meta name="twitter:site" content="http://shivamthakur.in"> 
	    <meta name="twitter:title" content="ShivamThakur.in"> 
	    <meta name="twitter:description" content="Hello, welcome to my website and my resume, I was sick of the old fashioned paper style, so this!"> 
	    <meta name="twitter:creator" content="Shivam Thakur"> 
	    <meta name="twitter:image" content="img/ico/favicon.ico">

	    <!-- Open Graph data --> 
	    <meta property="og:title" content="ShivamThakur.in" /> 
	    <meta property="og:type" content="website" /> 
	    <meta property="og:url" content="http://shivamthakur.in" />
	    <meta property="og:image" content="img/ico/favicon.png" />
	    <meta property="og:description" content="Hello, welcome to my website and my resume, I was sick of the old fashioned paper style, so this!" /> 
	    <meta property="og:site_name" content="ShivamThakur.in" />
	    <meta property="fb:app_id" content="1736305539967365" />
		
		<!-- Title -->
		<title>ShivamThakur.In</title>
		
		<!--========================================
			CSS Stylesheets
		=========================================-->
		
		<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> -->
		<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='css/waves.min.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='css/aos.css' >
		<link rel='stylesheet' type='text/css' href='css/style.css' >
		<!-- <link rel='stylesheet' type='text/css' href='css/font-awesome.min.css' > -->
	</head>
	<body>
		
		<!--========================================
			Preloader
		=========================================-->
		<div id='preloader' >
			<div class='loader' >
				<img src='img/loader.gif' alt>
			</div>
		</div>
		
		<!--========================================
			Menu
		=========================================-->
		<div class='top-nav' >
			<div class='container' >

				<a href='#' class='menu-btn2 white-btn' >
					<i class="fa fa-cog"></i>
				</a>
				<div class="themeAnims">
					<ul>
						<li class="them1"><i class="fa fa-check"></i></li>
						<li class="them2"></li>
					</ul>
				</div>
				
				<a href='#' class='menu-btn white-btn' >
					<span class='lines' >
						<span class='l1' ></span>
						<span class='l2' ></span>
						<span class='l3' ></span>
					</span>
				</a>
				
				<div class='menu' >
					<ul>
						
						<li>
							<a data-scroll href='#home' >Home</a>
						</li>
						
						<li>
							<a data-scroll href='#about' >About</a>
						</li>
						
						<li>
							<a data-scroll href='#services' >Services</a>
						</li>
						
						<li>
							<a data-scroll href='#skills' >Skills</a>
						</li>
						
						<li>
							<a data-scroll href='#portfolio' >Portfolio</a>
						</li>
						
						<li>
							<a data-scroll href='#timeline' >Timeline</a>
						</li>
						
						<li>
							<a data-scroll href='#contact' >Contact</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
		
		<!--========================================
			Main Section
		=========================================-->
		<section class='main-section' id='home' >
			<div class='container' >
				
				<!-- Person Image -->
				<div class='person-img' data-aos='zoom-out-down' >
					<img src='img/person.jpg' alt='Shivam Thakur'>
				</div>
				
				<!-- Your Name -->
				<h1 class='intro-name' data-aos='fade-up' data-aos-delay="250">I am <strong>Shivam Thakur</strong></h1>
				
				<!-- Intro -->
				<p class='intro-info' data-aos='fade-up' data-aos-delay="350">
					<span
				     class="txt-rotate"
				     data-period="1000"
				     data-rotate='[ "A designer & developer from Earth.", "Design what you want.", "Develop what you need.", "I can help." ]'></span>
 				</p>
				<br><br>
				<a href="#" id="hireMeBtn" class='btn-custom text-center' style="display:block;margin: 50px 0 auto 0;padding: 20px 5px;" role="button" data-aos='fade-up' data-aos-delay="500">Get in Touch</a>
			</div>
		</section>
		
		<section class='section about-section' id='about' >
			<div class='container' >
				
				<div class='section-header' data-aos='fade-right' >
					<h2>About Me</h2>
				</div>
				
				<!-- about text -->
				<div class='about-text' >
					
					<p data-aos='fade-up' data-aos-offset='0' data-aos-delay="250">
						I was born and raised in <span>Himachal Pradesh</span> where I grew up playing video games, spending time on a mountain top, and travelling places around.
					</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					
				</div>
<!-- 
				<div class='section-header' data-aos='fade-right' >
					<h2>Follow me up on</h2>
				</div> -->
				
				<!-- social links -->
<!-- 				<ul class='social-links' data-aos='fade-up' data-aos-delay="250">
					<li>
						<a href='https://www.facebook.com/mynameisshivam' target="_blank"><i class="fab fa-facebook fa-5x"></i></a>
					</li>
					<li>
						<a href='https://www.youtube.com/ShivamThakur9379?sub_confirmation=1' target="_blank"><i class="fab fa-youtube fa-5x"></i></a>
					</li>
					<li>
						<a href='https://www.instagram.com/mavi.hs' target="_blank"><i class="fab fa-instagram fa-5x"></i></a>
					</li>
					<li>
						<a href='https://www.linkedin.com/in/wwwshivu/' target="_blank"><i class="fab fa-linkedin fa-5x"></i></a>
					</li>
					<li>
						<a href='https://soundcloud.com/mynameisshivam' target="_blank"><i class="fab fa-soundcloud fa-5x"></i></a>
					</li>
					<li>
						<a href='https://plus.google.com/+ShivamThakur9379' target="_blank"><i class="fab fa-google-plus fa-5x"></i></a>
					</li>
				</ul> -->
				
			</div>
		</section>
		
		<!--========================================
			Funfacts Section
		=========================================-->
		<section class='section funfacts-section' id='funfacts' >
			<div class='container' >
				
				<div class='section-header' data-aos='fade-right' >
					<h2>Funfacts</h2>
				</div>
				
				<div class='row' >
					
					
					
					<div class='col-sm-3 col-xs-6' >
						<div class='funfact' data-aos='fade-up' data-aos-delay="250">
							<strong class="counter">63</strong>
							<span>Appreciations</span>
						</div>
					</div>
					
					<div class='col-sm-3 col-xs-6' >
						<div class='funfact' data-aos='fade-up' data-aos-delay="350">
							<strong class="counter">5</strong>
							<span>Projects</span>
						</div>
					</div>

					<div class='col-sm-3 col-xs-6' >
						<div class='funfact' data-aos='fade-up' data-aos-delay="450">
							<strong><span class="counter">20500</span></strong>
							<span>Cups of coffee</span>
						</div>
					</div>

					<!-- <a href="https://www.linkedin.com/in/wwwshivu/" target="_blank"><div class='col-sm-3 col-xs-6' >
						<div class='funfact' data-aos='fade-up'>
							<strong><i class="fab fa-linkedin fa-fw"></i></strong>
							<span>See more</span>
						</div>
					</div></a> -->
					
				</div>
			</div>
		</section>
		<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="75" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
		      <path d="M0 0 L50 100 L100 0 Z" fill="rgba(177, 177, 177, 0.29)" stroke="rgba(177, 177, 177, 0.29)"></path>
		    </svg>
		<!--========================================
			Services Section
		=========================================-->
		<section class='section services-section' id='services' >
			<div class='container' >
				
				<div class='section-header' data-aos='fade-right' >
					<h2>my Services</h2>
				</div>
				
				<div class='row' >
					<div class='col-sm-6' >
						
						<div class='service' data-aos='fade-up' >
							<span class="fa-stack fa-7x">
							  <i class="fas fa-circle fa-stack-2x"></i>
							  <i class="fas fa-paint-brush fa-stack-1x fa-inverse fa-sm"></i>
							</span>
							<h4>UI/UX Designing</h4>
							<p>
								It is important how the user interacts and experiences your website or app! Make sure you give them what they want.
							</p>
						</div>
						
					</div>
					<div class='col-sm-6' >
						
						<div class='service' data-aos='fade-up' >
							<span class="fa-stack fa-7x">
							  <i class="fas fa-circle fa-stack-2x"></i>
							  <i class="fas fa-code fa-stack-1x fa-inverse fa-sm"></i>
							</span>
							<h4>Web Development</h4>
							<p>
								Both front-end as well as back-end, that's what she said.
							</p>
						</div>
						
					</div>
				</div>
				<div class='row' >
					<div class='col-sm-6' >
						
						<div class='service' data-aos='fade-up' >
							<span class="fa-stack fa-7x">
							  <i class="fas fa-circle fa-stack-2x"></i>
							  <i class="fas fa-music fa-stack-1x fa-inverse fa-sm"></i>
							</span>
							<h4>Content Creator</h4>
							<p>
								As a hobby, I create Digital Content from time to time. For fun as well as for my Youtube & SoundCloud!
							</p>
						</div>
						
					</div>
					<div class='col-sm-6' >
						
						<div class='service' data-aos='fade-up' >
							<span class="fa-stack fa-7x">
							  <i class="fas fa-circle fa-stack-2x"></i>
							  <i class="fas fa-eye-dropper fa-stack-1x fa-inverse fa-sm"></i>
							</span>
							<h4>Graphic Designing</h4>
							<p>
								This came with UI/UX desiging, and it just stuck. Photoshop is such an amazing tool!
							</p>
						</div>
						
					</div>
				</div>
				<div class='row' >
					<div class='col-sm-6' >
						
						<div class='service' data-aos='fade-up' >
							<span class="fa-stack fa-7x">
								  <i class="fa fa-circle fa-stack-2x"></i>
								  <i class="fas fa-funnel-dollar fa-stack-1x fa-inverse fa-sm"></i>
							</span>
							<h4>Digital Marketing</h4>
							<p>
								In my 1 Year of corporate experience, I gained skills in digital marketing and learned how to build strategies, analyze the numbers and most of all, expand.
							</p>
						</div>
						
					</div>

					<div class='col-sm-6' >
						
						<div class='service' data-aos='fade-up' >
							<span class="fa-stack fa-7x">
							  <i class="fa fa-circle fa-stack-2x"></i>
							  <i class="fa fa-search fa-stack-1x fa-inverse fa-sm"></i>
							</span>
							<h4>SEO</h4>
							<p>
								This came with Web Developement! Analyzing my own website sparked the interest in me for optimizing the website for search engines!
							</p>
						</div>
						
					</div>
				</div>
				<div class='row' >
					<div class='col-sm-6' >
						
						<div class='service' data-aos='fade-up' >
							<span class="fa-stack fa-7x">
								  <i class="fa fa-circle fa-stack-2x"></i>
								  <i class="fa fa-coffee fa-stack-1x fa-inverse fa-sm"></i>
							</span>
							<h4>Freelancer</h4>
							<p>
								Small, one-time, instant payment jobs!
							</p>
						</div>
						
					</div>

					<div class='col-sm-6' >
						
						<div class='service' data-aos='fade-up' >
							<span class="fa-stack fa-7x">
							  <i class="fa fa-circle fa-stack-2x"></i>
							  <i class="fa fa-plus fa-stack-1x fa-inverse fa-sm"></i>
							</span>
							<h4>More!</h4>
							<p>
								coming soon..
							</p>
						</div>
						
					</div>
				</div>
			</div>
			</div>
		</section>
		
		<!--========================================
			Skills Section
		=========================================-->
		<section class='section skills-section' id='skills' >
			<div class='container' >
				
				<div class='section-header' data-aos='fade-right' >
					<h2>My Skills</h2>
				</div>
				
				<div class='skill' data-percent='95' data-aos='fade-up' data-aos-delay="250">
					<h4>HTML/CSS</h4>
					<span class='percent'>95%</span>
					<div class='skill-bar'>
						<div style='width:95%;' ></div>
					</div>
				</div>
				
				<div class='skill' data-percent='70' data-aos='fade-up' data-aos-delay="250">
					<h4>Javascript</h4>
					<span class='percent'>70%</span>
					<div class='skill-bar'>
						<div style='width:70%;' ></div>
					</div>
				</div>

				<div class='skill' data-percent='75' data-aos='fade-up' data-aos-delay="250">
					<h4>Digital Marketing</h4>
					<span class='percent'>75%</span>
					<div class='skill-bar'>
						<div style='width:75%;' ></div>
					</div>
				</div>
				
				<div class='skill' data-percent='85' data-aos='fade-up' data-aos-delay="250">
					<h4>PHP/mySQL</h4>
					<span class='percent'>85%</span>
					<div class='skill-bar'>
						<div style='width:85%;' ></div>
					</div>
				</div>
				
				<div class='skill' data-percent='80' data-aos='fade-up' data-aos-delay="250">
					<h4>Wordpress</h4>
					<span class='percent'>80%</span>
					<div class='skill-bar'>
						<div style='width:80%;' ></div>
					</div>
				</div>

				<div class='skill' data-percent='80' data-aos='fade-up' data-aos-delay="250">
					<h4>After Effects/Sony Vegas Pro</h4>
					<span class='percent'>80%</span>
					<div class='skill-bar'>
						<div style='width:80%;' ></div>
					</div>
				</div>

				<div class='skill' data-percent='85' data-aos='fade-up' data-aos-delay="250">
					<h4>Photography</h4>
					<span class='percent'>85%</span>
					<div class='skill-bar'>
						<div style='width:85%;' ></div>
					</div>
				</div>
				
			</div>
		</section>
		
		<!--========================================
			Portfolio Section
		=========================================-->
		<section class='section portfolio-section' id='portfolio' >
			<div class='container' >
				
				<div class='section-header' data-aos='fade-right' >
					<h2>my portfolio</h2>
				</div>
				
				<ul class='portfolio-items' data-aos='fade-up' data-aos-delay="250">
					<?php echo $echo; ?>

				</ul>
			</div>
		</section>
		<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="75" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
		      <path d="M0 0 L50 100 L100 0 Z" fill="rgba(177, 177, 177, 0.29)" stroke="rgba(177, 177, 177, 0.29)"></path>
		    </svg>
		<!--========================================
			Experience Section
		=========================================-->
		<section class='section experience-section' id='timeline' >
			<div class='container' >
				
				<div class='section-header' data-aos='fade-right' >
					<h2> my Timeline</h2>
				</div>
				
				<ul class='timeline' >

					<li data-aos='fade-up' class="current">
						<div class='date' >
							 Aug 2018 - 
						</div>
						<div class='content' >
							<h4>Pursuing MicroMasters Degree</h4>
							<span>UI/UX Research & Design</span>
						</div>
					</li>

					<li data-aos='fade-up' data-aos-delay="250">
						<div class='date' >
							 Aug 2017 - Aug 2018
						</div>
						<div class='content' >
							<h4><a href="https://www.roambee.com" target="_blank">Roambee Corp.</a> India</h4>
							<span>Web Developer & Content Marketer</span>
						</div>
					</li>
					
					<li data-aos='fade-up' data-aos-delay="250">
						<div class='date' >
							 Apr 2017 - Aug 2017
						</div>
						<div class='content' >
							<h4>Creating goTradez.com</h4>
							<span>Web Dev & Designer</span>
						</div>
					</li>

					<li data-aos='fade-up' class="current" data-aos-delay="250">
						<div class='date' >
							 Nov 2016 -
						</div>
						<div class='content' >
							<h4>Became a <a href="https://www.youtube.com/ShivamThakur9379?sub_confirmation=1" target="_blank">Youtuber</a></h4>
							<span>Content Creator</span>
						</div>
					</li>

					<li data-aos='fade-up' data-aos-delay="250">
						<div class='date' >
							 Aug 2015 - Jan 2017
						</div>
						<div class='content' >
							<h4>Created ZeusGods.com</h4>
							<span>Web Dev & Designer</span>
						</div>
					</li>

					<li data-aos='fade-up' data-aos-delay="250">
						<div class='date' >
							June 2015 - Jul 2016
						</div>
						<div class='content' >
							<h4>Created BlueMooch.com</h4>
							<span>Web Dev & Designer[WordPress]</span>
						</div>
					</li>
					
					<li data-aos='fade-up' data-aos-delay="250">
						<div class='date' >
							Jun 2013 - Jul 2017
						</div>
						<div class='content' >
							<h4>Attended SRM University</h4>
							<span>College Student</span>
						</div>
					</li>
					
					<li data-aos='fade-up' data-aos-delay="250">
						<div class='date' >
							Feb 2011 - Dec 2012
						</div>
						<div class='content' >
							<h4>Created IndianGameHost.com</h4>
							<span>IT Head</span>
						</div>
					</li>
					
					<li data-aos='fade-up' data-aos-delay="250">
						<div class='date' >
							Jan 2001 - Jan 2011
						</div>
						<div class='content' >
							<h4>Attended St. Lukes</h4>
							<span>School Student</span>
						</div>
					</li>
					
				</ul>
			</div>
		</section>
		
		<!--========================================
			Testimonials Section
		=========================================-->
		<section class='section testimonials-section' id='testimonials'>
			<div class='container' >
					
				<div class='section-header' data-aos='fade-right' >
					<h2>what people say</h2>
				</div>
				
				<div class='testimonials-slider' data-aos='fade-left' data-aos-delay="250">
					
					<div class='testimonial' >
						<div class='author-img' >
							<!-- <img src='https://graph.facebook.com/100000069332843/picture?type=large&height=126&width=126' alt> -->
						</div>
						<div class='content' >
							<div class='author-info' >
								<strong>Nitish Mittal</strong>
								<span>Founder @ ZeusGods.com</span>
							</div>
							<p>
								one of the finest work ever seen!
							</p>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="75" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
		      <path d="M0 0 L50 100 L100 0 Z" fill="rgba(177, 177, 177, 0.29)" stroke="rgba(177, 177, 177, 0.29)"></path>
		    </svg>
		
		<!--========================================
			Contact Section
		=========================================-->
		<section class='section contact-section' id='contact'>

			
			<div class='container' >
				<h3 class="footer-title" data-aos='fade-up'>Looking for a helping hand for your projects?</h3>
				<br><br>
				<div class='section-header' data-aos='fade-right' >
					<h2>Contact Me</h2>
				</div>
				<form action='contact.php' method='post' data-toggle='validator' id="contactForm">
													
					<div id='contact-form-result' ></div>
					
					<div class='row' >
						
						<div class='col-md-6' >
							
							<div class='form-group' data-aos='fade-up' data-aos-delay="250">
								<div class='material-input' >
									<input type='text' class='form-control' name='name' id='name' required>
									<label>Name</label>
									<span class='border'></span>
								</div>
								<div class='help-block with-errors' ></div>
							</div>
							
						</div>
						<div class='col-md-6' >
							
							<div class='form-group' data-aos='fade-up' data-aos-delay="250">
								<div class='material-input' >
									<input type='email' class='form-control' name='email' id='email' required>
									<label>Email</label>
									<span class='border'></span>
								</div>
								<div class='help-block with-errors' ></div>
							</div>
							
						</div>
					</div>
					
					
					<div class='form-group' data-aos='fade-up' data-aos-delay="250">
						
						<div class='material-input' >
							<input type='text' class='form-control' name='subject' id='subject' required>
							<label>Subject</label>
							<span class='border'></span>
						</div>
						
						<div class='help-block with-errors' ></div>
					</div>
					
					<div class='form-group' data-aos='fade-up' data-aos-delay="250">
						
						<div class='material-input' >
							<textarea class='form-control' rows='4' name='message' id='message' required></textarea>
							<label>Message</label>
							<span class='border'></span>
						</div>
						
						<div class='help-block with-errors' ></div>
					</div>
					
					<div class='form-group' data-aos='fade-up' data-aos-delay="250">
						<button type='submit' class='btn-custom2' id="submitBtn">Send Message</button>
					</div>
					
				</form>	
				
			</div>
		</section>
		
		<div id='toTop'><i class="fas fa-chevron-up"></i></div>
		<!--========================================
			Footer
		=========================================-->
		<?php include"footer.php";?>
			
		<!--========================================
			JavaScript Files
		=========================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/smooth-scroll.min.js' ></script>
		<script src='bootstrap/js/bootstrap.min.js'></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>

<!-- 		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->


		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/waves.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/aos.js' ></script>
		<script src='js/script.js' ></script>
		<script src='js/grad.js' ></script>
		<script src="js/jquery.flurry.js"></script>
		<script src="js/stck.js"></script>

		<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/solid.js" integrity="sha384-F4BRNf3onawQt7LDHDJm/hwm3wBtbLIfGk1VSB/3nn3E+7Rox1YpYcKJMsmHBJIl" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/regular.js" integrity="sha384-V+AkgA1cZ+p3DRK63AHCaXvO68V7B5eHoxl7QVN21zftbkFn/sGAIVR7vmQL3Zhp" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/brands.js" integrity="sha384-VLgz+MgaFCnsFLiBwE3ItNouuqbWV2ZnIqfsA6QRHksEAQfgbcoaQ4PP0ZeS0zS5" crossorigin="anonymous"></script>
		<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/fontawesome.js" integrity="sha384-treYPdjUrP4rW5q82SnECO7TPVAz4bpas16yuE9F5o7CeBn2YYw1yr5oC8s8Mf8t" crossorigin="anonymous"></script>

<!-- 		<script>!function(e,t,a,n,c,o,s){e.GoogleAnalyticsObject=c,e[c]=e[c]||function(){(e[c].q=e[c].q||[]).push(arguments)},e[c].l=1*new Date,o=t.createElement(a),s=t.getElementsByTagName(a)[0],o.async=1,o.src="https://www.google-analytics.com/analytics.js",s.parentNode.insertBefore(o,s)}(window,document,"script",0,"ga"),ga("create","UA-84846500-1","auto"),ga("send","pageview")</script> -->
		<!--Start of Tawk.to Script-->
<!-- 		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5906486164f23d19a89b008a/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script> -->
		<!--End of Tawk.to Script-->
	</body>
</html>