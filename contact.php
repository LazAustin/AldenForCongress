<?php

	include("contactForm.php");

?>

<!doctype html>
<html lang="en">
  
  <head>
  
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&display=swap" rel="stylesheet">
	
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<!--My Own CSS-->
	<link rel="stylesheet" href="contact.css">
<!--jQuery CSS-->
	<link href="jquery-ui.css" rel="stylesheet">		
	
<!--Basic jQuery and jQueryUI scripts-->
	<script type="text/javascript" src="jquery.min.js"></script>
	<script src="jquery-ui.js"></script>
			
<!--Title/tab-->
    <title>Alden for Congress</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/circle2small.png" />
	
<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-V82FJX9N82"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-V82FJX9N82');
	</script>
	
	
  </head>
  
  <body>

<!--Navbar-->

		<nav class="navbar navbar-expand-md navbar-light">
			<div class="container-fluid">
			
				<a class="navbar-brand" href="index.html"><img id="brandpic" class="d-inline-block align-top" src="images/banner.jpg"><span>Alden Johnson for Congress</span></a>
				
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
					
					<ul class="navbar-nav">
						
						<li class="nav-item">
						  <a id="donate-link" class="nav-link" aria-current="page" href="https://secure.anedot.com/alden-for-congress/donate">Donate</a>
						</li>
						
						<li class="nav-item">
						  <a class="nav-link" aria-current="page" href="index.html">Home</a>
						</li>
						
						<li class="nav-item">
						  <a class="nav-link" href="about.html">About</a>
						</li>
						
						<li class="nav-item">
						  <a class="nav-link" href="issues.html">Issues</a>
						</li>
						
						<li class="nav-item">
						  <a class="nav-link active" href="contact.php">Contact</a>
						</li>
						
					
						<ul class="navbar-nav sm-icons">
							<li class="nav-item"><a class="nav-link" href="http://facebook.com/alden4liberty"><i class="fa fa-facebook-square"></i></a></li>
							<li class="nav-item"><a class="nav-link" href="http://instagram.com/alden4liberty"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</ul>
						<!-- Might put back later						
						<li class="nav-item dropdown">
						
						  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Get Involved
						  </a>
						  
						  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item" href="#">Volunteer</a></li>
							<li><a class="dropdown-item" href="#">Newsletter</a></li>
							<div class="dropdown-divider"></div>
							<li><a class="dropdown-item" href="#">Donate</a></li>
						  </ul>
						  
						</li>
						-->
						
				</div>
			</div>
		</nav>
		
<!-- End Navbar -->		
 
		
<!-- Jumbotron -->

		<div class="jumbotron">
		  <div id="jumbotronContent">
			  <h1 class="display-4">Alden Johnson</h1>
			  <span class="lead">For Mississippi's 4th Congressional District</span>
			  <hr>
			  <p>All Your Freedoms, All the Time</p>
			  <form id="contributeName" class="row">
				  <input type="text" id="contributeFirstName" name="firstName" class="form-control" placeholder="First Name"/>
				  <input type="text" id="contributeLastName" name="lastName" class="form-control" placeholder="Last Name"/>
				</form>
				<form id="contributeContact" class="row">
				  <input type="email" id="contributeEmail" name="email" class="form-control" placeholder="Email"/>
				  <input type="text" id="contributeZip" name="zip"  pattern="[0-9]*" class="form-control" placeholder="Zip Code">
				  <a id="contributeButton" class="btn btn-primary btn-lg" href="#" role="button">Get Involved</a>
			  </form>
		  </div>
		  <img id="jumbotronImage" src="images/aldenjohnsoncropped.png">
		</div>
		
<!-- End Jumbotron -->
      
		<div id="mainBody" class="container">
      
			<h1>Get in touch!</h1>
      
			<div id="error"><? echo $error.$successMessage; ?></div>
		  
			<form id="contactForm" method="post">
			
				  <fieldset class="form-group mt-2">
				  
					<label for="email">Email address</label>
					<input type="email" class="form-control mt-2" id="email" name="email" placeholder="Enter email">
					<small class="text-muted">We'll never share your email with anyone else.</small>
					
				  </fieldset>
				  
				  <fieldset class="form-group mt-2"> 
				  
					<label for="subject">Subject</label>
					<input type="text" class="form-control mt-2" id="subject" name="subject" placeholder="Enter a subject">
					
				  </fieldset>
				  
				  <fieldset class="form-group mt-2">
				  
					<label for="exampleTextarea">What would you like to ask us?</label>
					<textarea class="form-control mt-2" id="content" name="content" rows="3"></textarea>
					
				  </fieldset>
				  
				  <button type="submit" id="submit" class="btn btn-primary mt-2">Submit</button>
			  
			</form>
          
		</div>

<!-- jQuery first, then Bootstrap JS. -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
          
          
		<script type="text/javascript">
          
          $("form").submit(function(e) {
              
              var error = "";
              
              if ($("#email").val() == "") {
                  
                  error += "The email field is required.<br>"
                  
              }
              
              if ($("#subject").val() == "") {
                  
                  error += "The subject field is required.<br>"
                  
              }
              
              if ($("#content").val() == "") {
                  
                  error += "The content field is required.<br>"
                  
              }
              
              if (error != "") {
                  
                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                  
                  return false;
                  
              } else {
                  
                  return true;
                  
              }
          })
          
		</script>
				
<!--Footer-->
		
		<footer class="text-white text-center text-lg-start">
		  <!-- Grid container -->
		  <div class="container p-4">
			<!--Grid row-->
			<div class="row">
			  <!--Grid column-->
			  <div class="col-lg-6 col-md-12 mb-6 mb-md-0">
				<h4 class="text-uppercase">Alden for Congress</h4>

				<p>
				  <img id="banner" src="images/banner.jpg">
				</p>
			  </div>
			  <!--Grid column-->

			  <!--Grid column-->
			  <div class="col-lg-2 col-md-4 mb-6 mb-md-0">
				
				<h5 class="text-uppercase mb-0">Menu</h5>
				<ul class="list-unstyled">
				  <li><a href="index.html" class="text-white">Home</a></li>
				  <li><a href="donate.html" class="text-white">Donate</a></li>
				  <li><a href="about.html" class="text-white">About</a></li>
				  <li><a href="issues.html" class="text-white">Issues</a></li>
				</ul>
				
			  </div>
			  <!--Grid column-->

			  <!--Grid column-->
			  <div class="col-lg-2 col-md-4 mb-6 mb-md-0">
				
				<h5 class="text-uppercase mb-0">Affilliates</h5>
				<ul class="list-unstyled">
				  <li><a href="http://mslp.org" class="text-white">MSLP.org</a></li>
				  <li><a href="http://lp.org" class="text-white">LP.org</a></li>
				  <li><a href="https://www.facebook.com/alden4liberty" class="text-white">Facebook</a></li>
				  <li><a href="https://www.instagram.com/alden4liberty/" class="text-white">Instagram</a></li>
				</ul>
				
			  </div>
			  
			  <div class="col-lg-2 col-md-4 mb-6 mb-md-0">
				
				<h5 class="text-uppercase mb-0">More Info</h5>
				<ul class="list-unstyled">
				  <li><a href="https://ballotpedia.org/Mississippi%27s_4th_Congressional_District" class="text-white">Ballotpedia</a></li>
				  <li><a href="https://en.wikipedia.org/wiki/Mississippi%27s_4th_congressional_district" class="text-white">Wikipedia</a></li>
				  <li><a href="https://www.govtrack.us/congress/members/MS/4" class="text-white">GovTrack</a></li>
				  
				</ul>
				
			  </div>
			  <!--Grid column-->
			</div>
			<!--Grid row-->
		  </div>
				  
				  <!-- Contact Me -->
				  <div id="contact">
				  
					<p>
					<h5><strong>Contact Me:</strong></h5>
					Alden Johnson<br>
					123 Main Street<br>
					Petal, MS 39465<br>
					Phone: &#40 012 &#41 345-6789<br>
					Email: alden4liberty22@gmail.com
					
					</p>
				  
				  </div>

<!--End Footer-->			

<!-- Copyright Bar -->

		  <div id="copywrightBar" class="text-center p-3">
			
			<p><span id="paidFor">Paid for by Friends of Alden Johnson</span></p>
			© 2020 Copyright:
			<a class="text-dark" href="https://mdbootstrap.com/">Alden for Congress</a>
		  
		  </div>
		  
<!-- End Copyright Bar-->
		  
		</footer>
		
		<!--
		<iframe width="425" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
		src="https://www.govtrack.us/congress/members/embed/mapframe?state=ms&district=4&bounds=-90.884,32.501,-87.541,29.671"></iframe> 
		-->
	
  </body>
  
</html>