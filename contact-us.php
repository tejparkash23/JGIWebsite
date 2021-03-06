<?php
  if(isset($_POST['submit'])){
       $to = "administration@jantagroup.co.in";
       $subject = $_POST['subject'];
       $fullname = $_POST['fullname'];
       $contactno = $_POST['contactno'];
       $email = $_POST['email'];
       
       $message = "Full Name : = '".$fullname."'";
       $message .= "Phone No : = '".$contactno."'";
       $message .= $_POST['des'];
       
       
       $header = "From:'".$email."' \r\n";
     //  $header .= "Cc:afgh@somedomain.com \r\n";
       $header .= "MIME-Version: 1.0\r\n";
       $header .= "Content-type: text/html\r\n";
       
       $retval = mail ($to,$subject,$message,$header);
       
       if( $retval == true ) {
          $msg =  "Message sent successfully...";
       }else {
          $msg =  "Message could not be sent...";
       }
  }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="css/uikit.css"/>

	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css"/>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="icon" href="images/favicon.png" type="images/png" sizes="32x32">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	

	<title>Janta Group Of Institutions</title>
</head>

<body>
<header>
	<div class="top-header">
		<div class="container-fluid">
			<div class="row align-items-center">

				<div class="col-xl-10 col-lg-12 col-6 col-top-info">
					<ul class="left-top">
						<li><a href="tel:+918059180598"><span><img src="images/phone.svg" alt=""></span> +91 8059180598</a></li>
						<li><a href="mailto:administration@jantagroup.co.in"><span><img src="images/email.svg" alt=""></span> administration@jantagroup.co.in</a> <a class="pl-0" href="mailto:mail@gbsedu.com">mail@gbsedu.com</a></li>
						<li><a href="javascript:void(0);"><span><img src="images/location.svg" alt=""></span> VPO Saraswati Nagar (Mustafabad), Distt Yamuna Nagar, Haryana- 133103</a></li>
					</ul>
				</div>

				<div class="col-xl-2 col-lg-12 col-6 col-social align-items-center d-flex justify-content-xl-end">
					<ul class="right-top">
						<li><a href="https://www.facebook.com/groups/188139024649505" target="_blank"><img src="images/facebook.svg" alt=""></a></li>
						<!-- <li><a href="#"><img src="images/twitter.svg" alt=""></a></li> -->
						<li><a href="https://www.linkedin.com/company/gbs-education-society/mycompany/?viewAsMember=true" target="_blank"><img src="images/linkedin.svg" alt=""></a></li>
					</ul>
					<a class="text-white ml-2 emply-btn" href="https://sharedrive.jantagroup.co.in/index.php/apps/files/?dir=/&fileid=2850" target="_blank">Employee Portal</a>
				</div>

			</div>
		</div>
	</div>

	<div class="main-header">
		<div class="container-fluid">
		<div class="row align-items-center">

			<div class="col logo-col">
				<div class="gbs-logo">
					<a href="index.html"><img src="images/jgi-logo.svg" alt=""></a>
				</div>
			</div>

			<div class="col nav-col d-flex align-items-center justify-content-end">
				<div id="gbs-navs" class="d-flex justify-content-end">
					<nav class="navbar navbar-expand-md p-md-0">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <img src="images/menu-bar.svg" alt="">
            </button>
						<div class="collapse navbar-collapse" id="navbarNav">
							<ul class="navbar-nav">


								<li class="nav-item">

                                    <div class="dropdown">
                                        <a id="navbarDropdown" class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us
                                            <img src="images/down-arrow.svg" width="10" alt="">
                                        </a>
                                        <div class="dropdown-menu smooth" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="history.html">History</a>
                                          <a class="dropdown-item" href="profile.html">Profile</a>
                                          <a class="dropdown-item" href="vision-and-mission.html">Vision and Mission</a>
                                          <a class="dropdown-item" href="mentorship.html">Chairman Message</a>
                                          <a class="dropdown-item" href="managing-director-message.html">Managing Director Message</a>
                                          <a class="dropdown-item" href="principals-message.html">principals message</a>
                                          <a class="dropdown-item" href="executive-director.html">executive director</a>
                                        </div>
                                      </div>
                                </li>
                                <li class="nav-item">

									<div class="dropdown">
			                            <a id="navbarDropdown" class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Institutes
			                            	<img src="images/down-arrow.svg" width="10" alt="">
			                            </a>
			                            <div class="dropdown-menu smooth" aria-labelledby="navbarDropdown">
			                              <a class="dropdown-item" target="_blank" href="http://janta.jantagroup.co.in/">Janta Sr. Sec. School</a>
			                              <a class="dropdown-item" target="_blank" href="http://gbs.jantagroup.co.in/">G.B.S. Public School</a>
			                              <a class="dropdown-item" target="_blank" href="http://www.spsjc.co.in/">SPS Janta College</a>
			                              <a class="dropdown-item" target="_blank" href="http://spsjce.jantagroup.co.in/">SPS Janta College Of Education</a>
			                              <a class="dropdown-item" target="_blank" href="http://bns.jantagroup.co.in/">BNS Janta Institutions of Management & Technology</a>
			                              <a class="dropdown-item" target="_blank" href="http://polytechnic.jantagroup.co.in/">Janta Polytechnic</a>
			                            </div>
			                          </div>
								</li>

								
								<li class="nav-item">

									<div class="dropdown">
			                            <a id="navbarDropdown" class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administration
			                            	<img src="images/down-arrow.svg" width="10" alt="">
			                            </a>
			                            <div class="dropdown-menu smooth" aria-labelledby="navbarDropdown">
			                              <a class="dropdown-item" href="association.html">Association</a>
			                              <a class="dropdown-item" href="club-committee.html">Club Committee</a>
			                              <a class="dropdown-item" href="alumni.html">Alumni</a>
			                              <a class="dropdown-item" href="mentorship.html">Mentorship</a>
			                            </div>
			                          </div>
								</li>



								<li class="nav-item">

									<div class="dropdown">
			                            <a id="navbarDropdown" class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics 
			                            	<img src="images/down-arrow.svg" width="10" alt="">
			                            </a>
			                            <div class="dropdown-menu smooth" aria-labelledby="navbarDropdown">
			                              <a class="dropdown-item" href="engineering.html">Engineering</a>
			                              <a class="dropdown-item" href="under-graduation.html">Under Graduation</a>
			                              <a class="dropdown-item" href="post-graduation.html">Post Graduation</a>
			                              <a class="dropdown-item" href="professional-courses.html">Professional Courses</a>
			                            </div>
			                          </div>
								</li>



								<li class="nav-item">

									<div class="dropdown">
			                            <a id="navbarDropdown" class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Facilities 
			                            	<img src="images/down-arrow.svg" width="10" alt="">
			                            </a>
			                            <div class="dropdown-menu smooth" aria-labelledby="navbarDropdown">
			                              <a class="dropdown-item" href="library-facilities.html">Library Facilities</a>
			                              <a class="dropdown-item" href="canteencafeteria.html">Canteen and Cafeteria</a>
			                              <a class="dropdown-item" href="hostel-facilities.html">Hostel facilities</a>
			                              <a class="dropdown-item" href="smart-lecture-room.html">Smart Lecture Room</a>
			                              <a class="dropdown-item" href="modern-science-and-tech-lab.html">Modern Science and Tech. Lab</a>
			                              <a class="dropdown-item" href="conferenceseminar-halls.html">Conference and Seminar Hall</a>
			                              <a class="dropdown-item" href="transportation.html">Transportation</a>
			                              <a class="dropdown-item" href="cells-and-clubs.html">Cells and Clubs</a>
			                            </div>
			                          </div>
								</li>


								<li class="nav-item">
									<a class="nav-link" href="placements.html">Placements</a>
								</li>

								<li class="nav-item">

									<div class="dropdown">
			                            <a href="#" id="dropdownMenu1" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Career 
			                            	<img src="images/down-arrow.svg" width="10" alt="">
			                            </a>
			                            <ul class="dropdown-menu smooth" role="menu" aria-labelledby="dropdownMenu">
							                <a class="dropdown-item" href="why-join-jgi.html">Why Join JGI</a>
			                            </ul>
			                          </div>
								</li>



								<li class="nav-item">

									<div class="dropdown">
			                            <a href="#" id="dropdownMenu1" class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery 
			                            	<img src="images/down-arrow.svg" width="10" alt="">
			                            </a>
			                            <ul class="dropdown-menu smooth" role="menu" aria-labelledby="dropdownMenu">
							                <a class="dropdown-item" href="photo-gallery229.html">Photo Gallery</a>
							                <a class="dropdown-item" href="media-gallery.html">Media Gallery</a>
			                            </ul>
			                          </div>
								</li>




								<!-- <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
								<li class="nav-item"><a class="nav-link" href="https://sharedrive.jantagroup.co.in/index.php/apps/forms/2SSNjZpHnLa5aCrb" target="_blank">Apply Online</a></li>
                				<li class="nav-item"><a class="nav-link" href="careers.php">Careers</a></li>
								<li class="nav-item"><a class="nav-link" href="contact-us.php">Contact</a></li> -->
							</ul>
						</div>
					</nav>
				</div>
				<div class="search-bar d-flex">
					<div class="jgi-login ml-3">
          				<a href="login.html" class="btn btn-primary pt-2 pb-2 theme-btn border-0">Student Login</a>
          			</div>         
      			</div>
      
			</div>

		</div>
	</div>
</div>

</header>
<!-- /header -->


<section>
	<div class="internal-page contact-page position-relative">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
            <h2>Contact Us</h2>
            <nav aria-label="breadcrumb" class="custom-breadcrumb">
              <ol class="breadcrumb bg-transparent p-0 m-0 text-center">
                <li class="breadcrumb-item"><a href="index.html"><span>Home</span></a></li>
                <li><span class="breadcrumb-separator"><img src="images/right-arrow.svg" alt=""></span></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
              </ol>
            </nav>
        </div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="contact-form section-space" uk-scrollspy="cls: uk-animation-slide-bottom-medium; uk-transition-slow; delay: 900;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="heading">
						<span>Get In Touch</span>
						<h2>Send Us A Message</h2>
					</div>
				</div>
			</div>

			<div class="row mt-xl-5 mt-md-4 mt-3">
				<div class="col-md-7 pr-xl-5 pr-lg-4">
					<form action="#" method="post">

					<div class="row">

						<div class="col-lg-6">
							<div class="form-group">
								<input type="text" placeholder="Full name" class="form-control default-input">
							</div>
						</div>
						<!-- @end input -->

						<div class="col-lg-6">
							<div class="form-group">
								<input type="email" placeholder="Email address" class="form-control default-input">
							</div>
						</div>
						<!-- @end input -->

						<div class="col-lg-6">
							<div class="form-group">
								<input type="phone" placeholder="Phone number" class="form-control default-input">
							</div>
						</div>
						<!-- @end input -->

						<div class="col-lg-6">
							<div class="form-group">
								<input type="text" placeholder="Subject" class="form-control default-input">
							</div>
						</div>
						<!-- @end input -->

						<div class="col-lg-12">
							<div class="form-group">
								<textarea placeholder="Description" class="form-control default-input" rows="6"></textarea>
							</div>
						</div>
						<!-- @end input -->

						<div class="col-md-12 text-right">
							<input type="submit" class="btn btn-primary form-submit-btn theme-btn border-0" value="Submit">
						</div>
						<!-- @end input -->

						</div>
					</form>
				</div>
				<!-- @end left side -->

				<div class="col-md-5">
					<div class="map-frame h-100">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d441387.8329441759!2d77.05761016116773!3d30.198772211166514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390e544dba346ff3%3A0x2f162eed79ce9384!2sPost%20office!5e0!3m2!1sen!2sin!4v1625076210204!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>


				<div class="col-12">
					<div class="contact-details">
							<ul>
								<li>
									<div class="contact-icon">
										<img src="images/location-color.svg" alt="">
									</div>

									<div class="contact-text">
										<h6>Location</h6>
										<span>VPO Saraswati Nagar (Mustafabad), Distt Yamuna Nagar, HR</span>
									</div>

								</li>

								<li>
									<div class="contact-icon">
										<img src="images/make-a-call.svg" alt="">
									</div>

									<div class="contact-text">
										<h6>Make a Call</h6>
										<span><a href="tel:+918059180598">+91 8059180598</a></span>
										<span>Mon - Fri: 09.00 to 18.00</span>
									</div>

								</li>

								<li>
									<div class="contact-icon">
										<img src="images/envelope-color.svg" alt="">
									</div>

									<div class="contact-text">
										<h6>Send a Mail</h6>
										<span><a href="mailto:jantagroup.co.in">jantagroup.co.in</a></span>
										<span><a href="mailto:singhindraj1313@gmail.com">singhindraj1313@gmail.com</a></span>
									</div>

								</li>

							</ul>
						</div>
				</div>


			</div>

		</div>
	</div>
</section>





<footer>
		<div class="container">
			<div class="row">

				<div class="col-xl-4 col-lg-4 col-md-12">
					<div class="about-nr-labs-mba">
						<h6>Janta Group of Institution</h6>
						<p>JGI Colleges offers an integrated curriculum that is designed towards delivering quality tertiary education in Engineering & Technology, Management & Business Studies and Computer Sciences. This, coupled with the highest standards of instruction would equip students with the requisite knowledge and skills to perform effectively in a dynamic industry environment.</p>
					</div>
				</div>

				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h6>Quick Links</h6>
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about-us.html">About Us</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="#">Admission</a></li>
							<li><a href="terms-conditions.html">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>

				<div class="col-xl-2 col-lg-2 col-md-3">
					<div class="footer-links">
						<h6>Other Links</h6>
						<ul>
							<li><a href="refund-policy.html">Refund Policy</a></li>
							<li><a href="#">Publications</a></li>
							<li><a href="#">Find Us</a></li>
							<li><a href="privacy-policy.html">Privacy Policy</a></li>
							<li><a href="#">Help Center</a></li>
						</ul>
					</div>
				</div>

				<div class="col-xl-4 col-lg-4 col-md-6">
					<div class="contact-us">
						<h6>Contact Us</h6>
						<address>
							<p><span><img src="images/home.svg" alt="" / /></span> <span>VPO Saraswati Nagar (Mustafabad), Distt Yamuna Nagar, Haryana- 133103</span></p>
							<p><span><img src="images/envelope.svg" alt="" / /></span><span><a href="mailto:administration@jantagroup.co.in">administration@jantagroup.co.in</a></span></p>
						</address>
						<div class="follow-nr-labs">
							<a href="https://www.facebook.com/groups/188139024649505" target="_blank"><img src="images/facebook-black.svg" alt=""></a>
							<!-- <a href="#"><img src="images/twitter-black.svg" alt=""></a> -->
							<a href="https://www.linkedin.com/company/gbs-education-society/mycompany/?viewAsMember=true" target="_blank"><img src="images/linkedin-black.svg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						Coppyrights &copy; 2021 Janta Group of Institution . All rights reserved.
					</div>
				</div>
			</div>
		</div>

	</footer>
<div class="janta-school-news">
	<div class="heading white-heading bottom-line">
	    <div class="section-title">
	        <h5>News &amp; Events</h5>
	    </div>
	</div>

	<div class="notice-board-info mt-lg-2">
	                            
	    <div class="newslist owl-carousel owl-theme">
	      
	      <div class="item">
		      	<div class="newsview">
	            	<h6>UK universities see boom in Chinese students</h6>
	            	<p>The number of Chinese students coming to the UK has increased by more than 30% in the last five years.</p>
	            	<a href="news-details.html">Read More</a>
	            </div>
	        </div>
	        <!-- /.item -->


	        <div class="item">
		      	<div class="newsview">
	            	<h6>Summit raises $4bn for schools despite aid row</h6>
	            	<p>World leaders pledge to get more children into school in the world's poorest countries.</p>
	            	<a href="https://www.bbc.com/news/education-58006728" target="_blank">Read More</a>
	            </div>
	        </div>
	        <!-- /.item -->


	        <div class="item">
		      	<div class="newsview">
	            	<h6>UK pledges ??430m on girls' education amid aid row</h6>
	            	<p>Boris Johnson at G7 announces funding for girls' education after row over international aid cuts.</p>
	            	<a href="https://www.bbc.com/news/education-57361483" target="_blank">Read More</a>
	            </div>
	        </div>
	        <!-- /.item -->


	        <div class="item">
		      	<div class="newsview">
	            	<h6>Girls' education 'smartest' investment, says PM</h6>
	            	<p>The PM urges more support for girls' education in poor countries - but faces criticism over aid cuts.</p>
	            	<a href="https://www.bbc.com/news/education-57092787" target="_blank">Read More</a>
	            </div>
	        </div>
	        <!-- /.item -->


	        <div class="item">
		      	<div class="newsview">
	            	<h6>PM says girls' education key to stopping poverty</h6>
	            	<p>The UK prime minister wants girls' education in developing countries to be a key international focus.</p>
	            	<a href="https://www.bbc.com/news/education-55680955" target="_blank">Read More</a>
	            </div>
	        </div>
	        <!-- /.item -->


	        <div class="item">
		      	<div class="newsview">
	            	<h6>Universities fear fall in lucrative overseas students</h6>
	            	<p>Education is one of the sectors of the global economy that is being hardest hit by the pandemic.</p>
	            	<a href="https://www.bbc.com/news/business-52508018" target="_blank">Read More</a>
	            </div>
	        </div>
	        <!-- /.item -->



	    </div>

		</div>
</div>
<!-- @/.janta news -->

<!-- <div class="quick-links">
    <a href="#"><span class="image-icon"><img src="images/date.svg" alt=""></span> <span class="i-name">Calendar</span></a>
    <a href="#"><span class="image-icon"><img src="images/apply.svg" alt=""></span> <span class="i-name">Apply online</span></a>
    <a href="#"><span class="image-icon"><img src="images/dollar.svg" alt=""></span> <span class="i-name">Pay Online</span></a>
</div> -->

<!-- popup -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      </div>
    </div>

  </div>
</div>


<div class="multiwebsites">
	<ul>
		<li><a class="website-link" href="http://janta.jantagroup.co.in/" target="_blank"><span class="web-logo"><img src="images/janta-logo.svg" alt=""></span><span class="short-name">Janta School</span><span class="website-name">Janta Sr. Sec. School</span></a></li>
    <li><a class="website-link" href="http://gbs.jantagroup.co.in/" target="_blank"><span class="web-logo"><img src="images/GBS.png" alt=""></span>
    	<span class="short-name">GBS School</span><span class="website-name">GBS Public School</a></li>
    <li><a class="website-link" href="http://www.spsjc.co.in/" target="_blank"><span class="web-logo"><img src="images/sps-logo.png" alt=""></span><span class="short-name">SPS College</span><span class="website-name">SPS Janta College</span></a></li>
    <li><a class="website-link" href="http://spsjce.jantagroup.co.in/" target="_blank"><span class="web-logo"><img src="images/GBS.png" alt=""></span><span class="short-name">SPSJCE</span><span class="website-name">SPS Janta College Of Education</span></a></li>
    <li><a class="website-link" href="http://bns.jantagroup.co.in/" target="_blank"><span class="web-logo"><img src="images/GBS.png" alt="">
    </span><span class="short-name">BNS</span><span class="website-name">BNS Janta Institutions of Management & Technology</span></a></li>
    <li><a class="website-link" href="http://polytechnic.jantagroup.co.in/" target="_blank"><span class="web-logo"><img src="images/GBS.png" alt=""></span><span class="short-name">Janta Polytechnic</span><span class="website-name">Janta Polytechnic</span></a></li>
	</ul>
</div>


<!-- Optional JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/owl.carousel.min.js"></script>  
<script src="js/uikit.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
	$(window).scroll(function() {
		if ($(this).scrollTop() > 5) {
			$('header').addClass("sticky");
		} else {
			$('header').removeClass("sticky");
		}
	});
</script>

<script>
  	$('#messages-view').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 30,
    dots: true,
    nav: false,
    items: 2,
	})
$('.newslist').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 30,
    dots: true,
    vertically: true,
    autoplayHoverPause: true,
    nav: false,
    items: 5,
    responsive:{
      768:{
          items:1,
          dots: false,
    		nav: false
      }
  	}
	})
 </script>
</body>
</html>
