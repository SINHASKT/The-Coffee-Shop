<!DOCTYPE HTML>

<?php
	session_start();
	$host='localhost';
	$user='root';
	$pass='';
	$db='coffee';
	$email=$_SESSION['email'];
	$con=mysqli_connect($host,$user,$pass,$db);
	if($con)
	{
	$sql="SELECT * FROM cart WHERE Email='$email'";
	$real=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($real);
	$total=$row['Cap']+$row['Lat']+$row['Choc']+$row['Black']+$row['Cold']+$row['Esp'];
	}
?>
<html>
	<head>
	<style>
	#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}
.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}
</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cart</title>

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">



	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="2.mp4" type="video/mp4">
</video>


	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">The Coffee Shop <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li class="active"><a href="menu.php">Menu</a></li>
						<li class="has-dropdown">
							<a href="index.php#services">Services</a>
							<ul class="dropdown">
								<li><a href="#">Get togethers</a></li>
								<li><a href="#">Wedding Celebration</a></li>
								<li><a href="#">Birthday's Celebration</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
						<li class="btn-cta"><a href="logout.php"><span>Logout</span></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	

	
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font primary-color">Your Cart Total:<?php echo $total ?></h2>
					<p>We bring you freshly brewed coffee from all around the world.</p>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_1.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_1.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Cappachino</h2>
							<p>You Ordered</p>
							<p><span class="price cursive-font">
							<?php 
							$price=$row['Cap'];
							$row['Cap']=$row['Cap']/150;
							echo "Quantity:".$row['Cap'];
							echo "<br>Price:".$price;							
							?>
							</span></p>
						</div>
					</a>
					
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_2.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_2.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Latte</h2>
							<p>You Ordered</p>
							<p><span class="price cursive-font">
						 <?php 
							$price=$row['Lat'];
							$row['Lat']=$row['Lat']/180;
							echo "Quantity:".$row['Lat'];
							echo "<br>Price:".$price;							
							?>
							</span></p>
						</div>
					</a>
					</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_3.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_3.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Choco Mocha</h2>
							<p>You Ordered</p>
							<p><span class="price cursive-font">
							<?php 
							$price=$row['Choc'];
							$row['Choc']=$row['Choc']/200;
							echo "Quantity:".$row['Choc'];
							echo "<br>Price:".$price;							
							?>
							</span></p>
							
						</div>
					</a></div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_4.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_4.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Black Coffee</h2>
							<p>You Ordered</p>
							<p><span class="price cursive-font">
							<?php 
							$price=$row['Black'];
							$row['Black']=$row['Black']/100;
							echo "Quantity:".$row['Black'];
							echo "<br>Price:".$price;							
							?>
						</div>
					</a>
					</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_5.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_5.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Cold Coffee</h2>
							<p>You Ordered</p>
							<p><span class="price cursive-font">
							<?php 
							$price=$row['Cold'];
							$row['Cold']=$row['Cold']/250;
							echo "Quantity:".$row['Cold'];
							echo "<br>Price:".$price;							
							?>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/img_6.jpg" class="fh5co-card-item image-popup">
						<figure>
							<div class="overlay"><i class="ti-plus"></i></div>
							<img src="images/img_6.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Espresso</h2>
							<p>You Ordered</p>
							<p><span class="price cursive-font">
							<?php 
							$price=$row['Esp'];
							$row['Esp']=$row['Esp']/150;
							echo "Quantity:".$row['Esp'];
							echo "<br>Price:".$price;							
							?>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>
	
	

	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

