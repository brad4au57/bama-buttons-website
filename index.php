<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!-- Custom CSS -->
	<link rel="stylesheet" href="styles/styles.css">
    <title>Bama Buttons</title>
  </head>

  <body>

  	<!-- Navbar -->
	<nav class="navbar navbar-custom navbar-expand-lg sticky-top" id="home">
		<div class="container">
			<a class="navbar-brand" href="#home">BamaButtons</a>
		

			<button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>

			<div class="collapse navbar-collapse justify-content-stretch" id="navbarTogglerDemo02">
			    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
			    	<li class="nav-item active">
			        	<a class="nav-link" href="#gallery">Gallery<span class="sr-only">(current)</span></a>
			        </li>
			      	<li class="nav-item">
			        	<a class="nav-link" href="#contact">Contact</a>
			        </li>
			    </ul>
			</div>
		</div>
	</nav>
	
	<!-- Nav Border -->
	<div class="nav-border-bottom"></div>

	<!-- Product Cards -->	
	<div class="container cards-container" id="gallery">
		<div class="row">
			<div class="my-4 px-5 col-12 col-md-4">
				<div class="card">
		 			<img class="card-img-top" src="img\button-designs\its-pronounced.jpg" alt="Card image cap">
		 			<div class="card-border"></div>
				</div>
			</div>
			<div class="my-4 px-5 col-12 col-md-4">
				<div class="card">
		 			<img class="card-img-top" src="img\button-designs\we-want-bama.jpg" alt="Card image cap">
		 			<div class="card-border"></div>
				</div>
			</div>
			<div class="my-4 px-5 col-12 col-md-4">
				<div class="card">
		 			<img class="card-img-top" src="img\button-designs\you-dont-want-bama.jpg" alt="Card image cap">
		 			<div class="card-border"></div>
				</div>
			</div>
			<div class="my-4 px-5 col-12 col-md-4">
				<div class="card">
		 			<img class="card-img-top" src="img\button-designs\beat-insert-team.jpg" alt="Card image cap">
		 			<div class="card-border"></div>
				</div>
			</div>
			<div class="my-4 px-5 col-12 col-md-4">
				<div class="card">
		 			<img class="card-img-top" src="img\button-designs\rmft.jpg" alt="Card image cap">
		 			<div class="card-border"></div>
				</div>
			</div>
		</div>
  	</div>

	<!-- Contact Section -->
	<div class="fluid-container contact mt-2" id="contact">	
		<div class="row mx-0">
			<div class="col-12 col-md-6 my-auto px-3 text-center contact-text">	
				<p class="largeText">Interested in our buttons?</p>
				<p class="smallText">Contact us at: <br /> ButtonMaker@bamabuttons.com</p>
				<p class="largeText">OR</p>
				<p class="smallText">Fill out the form to send us a quick message!</p>
			</div>
			
			<div class="col-md-6"> 
				<form class="col-12 contact-form">
					<div class="form-group row">
				    	<label for="personName" class="col-12 col-form-label">Name:</label>
				    	<div class="col-12">
				      		<input type="text" class="form-control" id="personName" placeholder="Your Name..." required>
				    	</div>
				    </div>

				    <div class="form-group row">
				    	<label for="personEmail" class="col-12 col-form-label">Email:</label>
				    	<div class="col-12">
				      		<input type="email" class="form-control" id="personEmail" placeholder="Your email...">
				    	</div>
				    </div>
				    
				    <div class="form-group">
	    				<label for="textArea">Message:</label>
	    				<textarea class="form-control" id="textArea" rows="4"  placeholder="Your Message..."></textarea>
	  				</div>

				  
				  	<div class="form-group row">
				    	<div class="col-sm-10">
				      			<button type="submit" class="btn btn-primary">Sign in</button>
				    	</div>
					</div>
				</form>
			</div>
		</div>	
	</div>



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>