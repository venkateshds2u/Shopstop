<?php


session_start();
error_reporting(0);

	if(isset($_GET['action']) && $_GET['action']=="add")
		  { 
		          
		        $id=intval($_GET['selectedid']); 
		        if(isset($_SESSION['cart'][$id]))
				{ 
		              
		            //$_SESSION['cart'][$id]['quantity']++; 
		            echo $_SESSION['cart'][$id]['quantity']++; 
		            echo "hello";
		              
		        }
		        else
				{ 
					//echo $id;
					//echo "in else loop";
					include "connection_shaurya.php";

					$company = "San Jose Downtown University";

					$conn = shauryaConnection();
	
					// Check connection
					if ($conn->connect_error) {
						echo("error");
			 		   die("Connection failed: " . $conn->connect_error);
					}	
		              
		            $sql_s="SELECT * FROM products WHERE product_id={$id}"; 
		                
		           $result=$conn->query($sql_s); 
		            if($result->num_rows > 0)
		            { 
		            	//echo "chekc";
		                $row_s=$row = $result->fetch_assoc(); 
		                //$_SESSION['name']= $row['price'];
		                //echo $_SESSION['name'];
		                  
		                $_SESSION['cart'][$row_s['product_id']]=array("quantity" => 1, "price" => $row_s['price']  ); 
		                echo $_SESSION['cart'][$id]['price'];

		                 
		                  
		                                
		                  
		            }
					else
					{ 
		                  
		                $message="This product id it's invalid!"; 
		                  
		            } 
		              
		        } 
		          
		        

		  }
?>
		  

<!DOCTYPE html>
<html>
<head>
	<title>Product Detail</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/product.css">
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
		    <a class="nav-item nav-link" href="#top">Top Rated</a>
		    <a class="nav-item nav-link" href="#">About</a>
		    <a class="nav-item nav-link float-lg-right" href="#" data-toggle="modal" data-target="#loginModal">Login</a>
		    <a class="nav-item nav-link float-lg-right" href="#" data-toggle="modal" data-target="#signupModal">Sign Up</a>
		  </div>
		</nav>

	</header>

	<p>The product has been added </p>
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>	
</body>
</html>