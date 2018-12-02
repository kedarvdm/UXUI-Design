<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>SellHub</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
	
	<link href="css/toolkit-inverse.css" rel="stylesheet">
	
	<link href="css/sellhub.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-inverse">
	  <a class="navbar-brand" href="sellhub.home.php"><i class="fa fa-scribd" aria-hidden="true"></i><span class="logo">ellHub</span></a>
	  <ul class="nav navbar-nav pull-xs-right">
		<li><a class="nav-item nav-link" href="sellhub.home.php">Home</a></li>
		<li class="nav-item btn-group">
			<a class="dropdown-toggle nav-link" type="button" id="ServicesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Services
			</a>
			<div class="dropdown-menu" aria-labelledby="ServicesMenu">
				<a class="dropdown-item bg-inverse disabled" href="sell/sell.home.php" type="button" data-toggle="tooltip" title="Coming Soon!!">Sell</a>
				<a class="dropdown-item bg-inverse" href="buy/buy.home.php" type="button" data-toggle="tooltip" title="Buy!!">Buy</a>
				<a class="dropdown-item bg-inverse disabled" href="trade/trade.home.php" type="button" data-toggle="tooltip" title="Coming Soon!!">Trade</a>
			</div>
		</li>
		<li><a class="nav-item nav-link disabled" href="" data-toggle="tooltip" title="Coming Soon!!">About Us</a></li>
		<li class="nav-item btn-group">
			<a class="dropdown-toggle nav-link" type="button" id="ProfileMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-user fa-fw"></i> Profile
			</a>
			<div class="dropdown-menu bg-inverse" aria-labelledby="ProfileMenu">
				<a class="dropdown-item bg-inverse disabled" href="myaccount/myaccount.personalinfo.php" type="button" data-toggle="tooltip" title="Coming Soon!!">Personal Information</a>
				<a class="dropdown-item bg-inverse disabled" href="myaccount/myaccount.accounts.php" type="button" data-toggle="tooltip" title="Coming Soon!!">Manage Accounts</a>
				<a class="dropdown-item bg-inverse disabled" href="myaccount/myaccount.biometrics.php" type="button" data-toggle="tooltip" title="Coming Soon!!">Manage Bio-metrics</a>
				<a class="dropdown-item bg-inverse disabled" href="myaccount/myaccount.changepassword.php" type="button" data-toggle="tooltip" title="Coming Soon!!">Change Password</a>
				<a class="dropdown-item bg-inverse" href="loggedout.php" type="button" data-toggle="tooltip" title="Log Out">Sign Out</a>
			</div>
		</li>
		<li><a type="button" class="nav-item nav-link" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
	  </ul>
	</nav>
	
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog bg-inverse" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-inverse">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true"><i class="fa fa-times text-danger" aria-hidden="true"></i></span>
			</button>
			<h4 class="modal-title text-warning" id="myModalLabel">Your Shopping Cart</h4>
		  </div>
		  <div class="modal-body bg-inverse">
			<?php
				if(isset($_SESSION["products"]))
				{
					$total = 0;
					echo '<div class="jumbotron bg-inverse">';
					echo '<ul>';
					foreach ($_SESSION["products"] as $cart_itm)
					{
						echo '<li class="cart-itm">';
						echo '<h3>'.$cart_itm["name"].'<a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'" class="btn btn-danger pull-right" rel="tooltip" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a></h3>';
						echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
						echo '</li>';
						$subtotal = ($cart_itm["price"]);
						$total = ($total + $subtotal);
					}
					echo '</ul>';
					echo '</div>';
					echo '<p><strong>Total : '.$currency.$total.'</strong> </p>';
					echo '<div>';
					echo '<p><a href="buy.checkout.php" class="btn btn-lg btn-warning btn-block" rel="tooltip" role="button">Check-out!</a></p>';
					echo '</div>';
				}else{
					echo 'Your Cart is empty';
				}
			?>
		  </div>
		</div>
	  </div>
	</div>
	
	<!-- Carousel
    ================================================== -->
	
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
			  <img class="first-slide" src="images/SellHubHome/M1.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
			  <img class="second-slide" src="images/SellHubHome/M2.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
			  <img class="third-slide" src="images/SellHubHome/M3.jpg" alt="Third slide">
			</div>
		  </div>
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div><!-- /.carousel -->

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <a class="disabled"  href="#" data-toggle="tooltip" title="Coming Soon!!"><img class="img-circle" src="images/SellHubHome/Sell-small.jpg" alt="Generic placeholder image" width="200" height="200"></a>
          <a class="disabled"  href="#" data-toggle="tooltip" title="Coming Soon!!"><h2>Sell</h2></a>
          <p><a class="btn btn-lg btn-danger disabled" href="#" data-toggle="tooltip" title="Coming Soon!!">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
		  <a href="buy/buy.home.php" data-toggle="tooltip" title="Buy!!"><img class="img-circle" src="images/SellHubHome/Buy-small.jpg" alt="Generic placeholder image" width="200" height="200"></a>
          <a class="disabled" href="buy/buy.home.php" data-toggle="tooltip" title="Buy!!"><h2>Buy</h2></a>
		  <p><a class="btn btn-lg btn-danger" href="buy/buy.home.php" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <a class="disabled"  href="#" data-toggle="tooltip" title="Coming Soon!!"><img class="img-circle" src="images/SellHubHome/Trade-small.jpg" alt="Generic placeholder image" width="200" height="200"></a>
          <a class="disabled"  href="#" data-toggle="tooltip" title="Coming Soon!!"><h2>Trade</h2></a>
          <p><a class="btn btn-lg btn-danger disabled"  href="#" data-toggle="tooltip" title="Coming Soon!!">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	  </div><!-- /.container -->

	  <!-- FOOTER -->
	<div class="container-fluid">
      <footer>
		<hr class="featurette-divider">
		<div class="col-sm-offset-1 col-sm-10 text-xs-center">
			<h2><i class="fa fa-scribd" aria-hidden="true"></i><span class="logo">ellHub.com</span></h2>
			<table width="90%" style="margin:auto">
				<tr class="text-xs-center">
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">About Us</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">Careers</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">FAQ</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">Helpline</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">Contact Us</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">Privacy</a></td>
					<td><a class="disabled" data-toggle="tooltip" title="Coming Soon!!">Terms</a></td>
				</tr>
			</table>
			<br/>
			<table width="50%" style="margin:auto">
				<tr>
					<td><a class="disabled text-warning" data-toggle="tooltip" title="Google+ Coming Soon!!"><i class="fa fa-2x fa-google-plus-square" aria-hidden="true"></i></a></td>
					<td><a class="disabled text-primary" data-toggle="tooltip" title="Facebook Coming Soon!!"><i class="fa fa-2x fa-facebook-official" aria-hidden="true"></i></a></td>
					<td><a class="disabled text-info" data-toggle="tooltip" title="Twitter Coming Soon!!"><i class="fa fa-2x fa-twitter-square" aria-hidden="true"></i></a></td>
					<td><a class="disabled text-danger" data-toggle="tooltip" title="Email Coming Soon!!"><i class="fa fa-2x fa-envelope" aria-hidden="true"></i></a></td>
				</tr>
			</table>
			<br/>
			<p><strong>&copy; 2016 Company, Inc.</strong></p>
		</div>
      </footer>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
