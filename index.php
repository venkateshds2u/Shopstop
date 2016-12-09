<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop Stop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.0.0/bootstrap-social.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>

		<nav class="navbar navbar-dark bg-inverse topnav">
		  <div class="nav navbar-nav container">
		  	<a class="navbar-brand" href="index.php">
		  		Shop Stop
		  	</a>		  	
		    <a class="nav-item nav-link active ml-2" href="index.php">Home <span class="sr-only">(current)</span></a>
		    <a class="nav-item nav-link" href="all_products.php">All Products</a>
<!--MP-->   <a class="nav-item nav-link" href="all_reviews.php">Best Reviewed Products</a>   
<!--MP-->   <a class="nav-item nav-link" href="all_visits.php">Most Visited Products</a>   
		    <a class="nav-item nav-link" href="#top">Top Rated</a>
		    <a class="nav-item nav-link" href="#">About</a>
		    <a class="nav-item nav-link float-lg-right" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
		    <a class="nav-item nav-link float-lg-right" href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a>
		  </div>
		</nav>

	</header>

	<!-- Login modal Starts Here -->

	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title text-xs-center" id="myModalLabel">Login</h4>
	      </div>
	      <div class="modal-body">
	        <form action="">
			  	<div class="form-group row">
				  <label for="example-text-input" class="col-xs-2 col-form-label">Username</label>
				  <div class="col-xs-10">
				    <input class="form-control" type="text" id="example-text-input">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-xs-2 col-form-label">Password</label>
				  <div class="col-xs-10">
				    <input class="form-control" type="password" id="example-search-input">
				  </div>
				</div>
				<div class="row text-white">
				  <div class="offset-md-2 col-xs-5">
				    <a class="btn btn-block btn-social btn-facebook">
					    <span class="fa fa-facebook"></span> Sign in with Facebook
					</a>
				  </div>
				  <div class="col-xs-5">
				    <a class="btn btn-block btn-social btn-google">
					   <span class="fa fa-google"></span> Sign in with Google
					</a>
				  </div>
				</div>

			</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary bg-inverse text-white">Login</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Login modal Ends Here -->

	<!-- Signup modal Starts Here -->

	<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	        <h4 class="modal-title text-xs-center" id="myModalLabel">Sign Up</h4>
	      </div>

	      <form action="index.php" method="POST">
	      	<div class="modal-body">
	      		<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">First Name</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="text" id="example-text-input" name="firstname">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Last Name</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="text" id="example-text-input" name="lastname">
				  </div>
				</div>
			  	<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Email</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="email" id="example-text-input" name="email">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Username</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="text" id="example-text-input" name="username">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-text-input" class="col-xs-4 col-form-label">Password</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="password" id="example-text-input" name="password">
				  </div>
				</div>
				<div class="form-group row">
				  <label for="example-search-input" class="col-xs-4 col-form-label">Retype Password</label>
				  <div class="col-xs-8">
				    <input class="form-control" type="password" id="example-search-input">
				  </div>
				</div>
				<div class="row text-white mb-2">
				  <div class="offset-md-4 col-xs-4">
				    <a class="btn btn-block btn-social btn-facebook">
					    <span class="fa fa-facebook"></span> Facebook
					</a>
				  </div>
				  <div class="col-xs-4">
				    <a class="btn btn-block btn-social btn-google">
					   <span class="fa fa-google"></span> Google
					</a>
				  </div>
				</div>			
	      	</div>
		    <div class="modal-footer">
		       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		       <button type="submit" class="btn btn-primary bg-inverse text-white" name="signup">Sign Up</button>
		    </div>
	      </form>
	    </div>
	  </div>
	</div>

	<?php include 'signup_router.php';?>

	<!-- Signup modal Ends Here -->

	<!-- Carousel Starts here -->

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner" role="listbox">
	    <div class="carousel-item active">
	      <img src="img/study.jpg" alt="First slide" class="carousel-images">
	      <div class="carousel-caption mb-1">
		    <h3>San Jose Downtown University</h3>
		    <p>Take various courses and explore the universe of knowledge</p>
			<button type="button" class="btn btn-outline-secondary">Explore</button>
		  </div>
	    </div>
	    <div class="carousel-item">
	      <img src="img/house.jpg" alt="Second slide" class="carousel-images">
	      <div class="carousel-caption mb-1">
		    <h3>Real Estate</h3>
		    <p>Looking to purchase a house. Here is all you need</p>
			<button type="button" class="btn btn-outline-secondary">Explore</button>
		  </div>
	    </div>
	    <div class="carousel-item">
<!--MP--> <img src="img/ultra.jpg" alt="Second slide" class="carousel-images">
	      <div class="carousel-caption mb-1">
<!--MP--> 		    <h3>Ultra Running Inc.</h3>
<!--MP--> 		    <p>Find your trail with the best gear</p>
			<button type="button" class="btn btn-outline-secondary">Explore</button>
		  </div>
	    </div>
	  </div>
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="icon-prev" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="icon-next" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<!-- End of Carousel -->

	<!-- Top Rated products -->
	<div class="container mt-2" id="top">
		<div class="container display-4 text-xs-center mb-2"> Our Top Rated Products</div>
		<div class="row top-rated-row mb-2">
			<div class="card col-md-5 px-0">
			  <div class="card-block">
			    <h5 class="card-title top-rated-title text-xs-center">Computer Engineering Course</h5>
			    <h6 class="card-subtitle text-muted text-xs-center">San Jose Downtown University</h6>
			  </div>
			  <img src="http://3.bp.blogspot.com/-UVx24A5E8iI/Vo_jHnZZjMI/AAAAAAAAAGs/aLTAIL5PAq4/s640/Computer%2BProgramming%2BCourses%2BCan%2BBe%2BYour%2BTicket%2BTo%2BThe%2BGood%2BLife.jpg" alt="Card image" class="img-fluid" >
			  <div class="card-block row container-fluid">			    
			  	<h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1">$600</h6>			    
	        	<button type="button" class="btn bg-inverse text-white offset-xs-1 col-xs-10">Buy</button>
			  </div>
			</div>

			<div class="card offset-sm-2 col-md-5 px-0">
			  <div class="card-block">
			    <h5 class="card-title top-rated-title text-xs-center">Watch</h4>
			    <h6 class="card-subtitle text-muted text-xs-center">Mom Consulting</h6>
			  </div>
			  <img src="http://economydecoded.com/wp-content/uploads/2016/10/nike-watch-640x360.jpg" alt="Card image" class="img-fluid" >
			  <div class="card-block row container-fluid">			    
			  	<h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1">$370</h6>			    
	        	<button type="button" class="btn bg-inverse text-white offset-xs-1 col-xs-10">Buy</button>
			  </div>
			</div>
		</div>

		<div class="row top-rated-row mb-2">
			<div class="card col-md-5 px-0">
			  <div class="card-block">
			    <h5 class="card-title top-rated-title text-xs-center">3 BHK flat - San Jose</h5>
			    <h6 class="card-subtitle text-muted text-xs-center">Isaacagam</h6>
			  </div>
			  <img src="https://www.photomast.com/wp-content/uploads/2016/03/Realestate3-640x360.jpg" alt="Card image" class="img-fluid" >
			  <div class="card-block row container-fluid">			    
			  	<h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1">$800,000</h6>
	        	<button type="button" class="btn bg-inverse text-white offset-xs-1 col-xs-10">Buy</button>
			  </div>
			</div>

			<div class="card offset-sm-2 col-md-5 px-0">
			  <div class="card-block">
			    <h5 class="card-title top-rated-title text-xs-center">Head Lamp</h4>
			    <h6 class="card-subtitle text-muted text-xs-center">Mom Consulting</h6>
			  </div>
			  <img src="https://www.copquest.com/product-images/fenix-hl55-led-headlamp-900-lumens_18-8255_a.jpg" alt="Card image" class="img-fluid" >
			  <div class="card-block row container-fluid">			    
			  	<h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1">$89</h6>			    
	        	<button type="button" class="btn bg-inverse text-white offset-xs-1 col-xs-10">Buy</button>
			  </div>
			</div>
		</div>

		<div class="row top-rated-row mb-2">
			<div class="card col-md-5 px-0">
			  <div class="card-block">
			    <h5 class="card-title top-rated-title text-xs-center">Automobile Engineering</h5>
			    <h6 class="card-subtitle text-muted text-xs-center">San Jose Downtown University</h6>
			  </div>
			  <img src="https://cdn.materia.nl/wp-content/uploads/2016/04/toyota-s-wood-car-captures-the-beauty-of-materials-over-time-05-640x360.jpg" alt="Card image" class="img-fluid" >
			  <div class="card-block row container-fluid">			    
			  	<h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1">$1100</h6>
	        	<button type="button" class="btn bg-inverse text-white offset-xs-1 col-xs-10">Buy</button>
			  </div>
			</div>

			<div class="card offset-sm-2 col-md-5 px-0">
			  <div class="card-block">
			    <h5 class="card-title top-rated-title text-xs-center">4 BHK - Sunnyvale</h4>
			    <h6 class="card-subtitle text-muted text-xs-center">Isaacagam</h6>
			  </div>
			  <img src="http://biggolftutorials.com/wp-content/uploads/2016/07/maxresdefault32-640x360.jpg" alt="Card image" class="img-fluid" >
			  <div class="card-block row container-fluid">			    
			  	<h6 class="card-subtitle text-muted text-xs-center mb-1 mt-1">$950,000</h6>			    
	        	<button type="button" class="btn bg-inverse text-white offset-xs-1 col-xs-10">Buy</button>
			  </div>
			</div>
		</div>

	</div>
	<!-- Top Rated Section ends here -->

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>	
</body>
</html>