<?php
	require("../config.php");
	$productid=$_GET['productid'];
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>SellHub</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
	
	<link href="../css/toolkit-inverse.css" rel="stylesheet">
	
	<link href="../css/sellhub.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/jquery-ui.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-inverse">
	  <a class="navbar-brand" href="../sellhub.home.php"><i class="fa fa-scribd" aria-hidden="true"></i><span class="logo">ellHub</span></a>
	  <ul class="nav navbar-nav pull-xs-right">
		<li><a class="nav-item nav-link" href="buy.home.php">Home</a></li>
		<li class="nav-item btn-group">
			<a class="dropdown-toggle nav-link" type="button" id="ServicesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Services
			</a>
			<div class="dropdown-menu" aria-labelledby="ServicesMenu">
				<a class="dropdown-item bg-inverse disabled" type="button" data-toggle="tooltip" title="Coming Soon!!">Sell</a>
				<a class="dropdown-item bg-inverse" href="buy.home.php" type="button" data-toggle="tooltip" title="Buy!!">Buy</a>
				<a class="dropdown-item bg-inverse disabled"type="button" data-toggle="tooltip" title="Coming Soon!!">Trade</a>
			</div>
		</li>
		<li><a class="nav-item nav-link disabled" data-toggle="tooltip" title="Coming Soon!!">About Us</a></li>
		<li class="nav-item btn-group">
			<a class="dropdown-toggle nav-link" type="button" id="ProfileMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa fa-user fa-fw"></i> Profile
			</a>
			<div class="dropdown-menu bg-inverse" aria-labelledby="ProfileMenu">
				<a class="dropdown-item bg-inverse disabled" type="button" data-toggle="tooltip" title="Coming Soon!!">Personal Information</a>
				<a class="dropdown-item bg-inverse disabled" type="button" data-toggle="tooltip" title="Coming Soon!!">Manage Accounts</a>
				<a class="dropdown-item bg-inverse disabled" type="button" data-toggle="tooltip" title="Coming Soon!!">Manage Bio-metrics</a>
				<a class="dropdown-item bg-inverse disabled" type="button" data-toggle="tooltip" title="Coming Soon!!">Change Password</a>
				<a class="dropdown-item bg-inverse" href="../loggedout.php" type="button" data-toggle="tooltip" title="Sign Out">Sign Out</a>
			</div>
		</li>
		<li><a type="button" class="nav-item nav-link" data-toggle="modal" data-target="#myModal"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
	  </ul>
	</nav>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog bg-inverse" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-inverse">
			<div class="col-sm-9">
				<h4 class="modal-title text-warning" id="myModalLabel">Your Shopping Cart</h4>
			</div>
			<div class="col-sm-3">
				<button type="button" class="btn btn-lg btn-warning" data-dismiss="modal" aria-label="Close">Continue Shopping
				  <span aria-hidden="true"><i class="fa fa-times text-danger" aria-hidden="true"></i></span>
				</button>
			</div>
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

	<div class="content container-fluid">
		<div class="row">
			<div class="col-sm-2 text-xs-center">
				<ul class="nav nav-pills nav-stacked">
				  <li class="nav-item">
					<h3><i class="fa fa-user" aria-hidden="true"></i> <span class="text-warning">Jon Snow</span></h3>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="buy.home.php" data-toggle="tooltip" title="Coming Soon!!"><i class="fa fa-home" aria-hidden="true"></i> Buy</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" data-toggle="tooltip" title="Coming Soon!!"><i class="fa fa-shopping-basket" aria-hidden="true"></i> My Orders</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" data-toggle="tooltip" title="Coming Soon!!"><i class="fa fa-user" aria-hidden="true"></i> My Account</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link disabled" data-toggle="tooltip" title="Coming Soon!!"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a>
				  </li>
				</ul>
			</div>
			<div class="col-sm-offset-1 col-sm-7">
				<?php
					
					$query = " 
						SELECT p.title as title
						FROM product p
						WHERE p.id = ".$productid."
						LIMIT 1;";
						
					$results = $db->query($query);
					$obj = $results->fetch_object();
					echo '<h2>'.$obj->title.'</h2>'
				?>
				
				<div class="row">
					<!--Carousel-->
					<!-- Indicators -->
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<?php
						$query = " 
						SELECT productid, imagepath
						FROM product_images
						WHERE productid = ".$productid.";";
						
						$resultSet = $db->query($query, MYSQLI_STORE_RESULT);
						
						
						if($resultSet)
						{
							while ($row = $resultSet->fetch_assoc())
							{
								$imagepath_array[] = $row['imagepath']; 
							}
						}
						
						$i=0;
						echo '<ol class="carousel-indicators">';
						foreach ($imagepath_array as $value) {
							if($i==0)
							{
								echo '<li data-target="#myCarousel" data-slide-to="'.$i.'" class="active"></li>';
							}
							else
							{
								echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';
							}
							$i++;
						}
						echo '</ol>';
						
						$i=0;
						echo '<div id="myCarousel" class="carousel slide" data-ride="carousel">';
						echo '<div class="carousel-inner" role="listbox">';
						foreach ($imagepath_array as $value) {
							if($i==0)
							{
								echo '	<div class="carousel-item active">';
								echo '		<img class="first-slide carouselimg" src="'.$value.'" alt="slide"></img>';
								echo '	</div>';
							}
							if($i==1)
							{
								echo '	<div class="carousel-item">';
								echo '		<img class="second-slide carouselimg" src="'.$value.'" alt="slide"></img>';
								echo '	</div>';
							}
							if($i==22)
							{
								echo '	<div class="carousel-item">';
								echo '		<img class="second-slide carouselimg" src="'.$value.'" alt="slide"></img>';
								echo '	</div>';
							}
							
							$i++;
						}
						echo '</div>';
						echo '<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">';
						echo '<i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true"></i>';
						echo '<span class="sr-only">Previous</span>';
						echo '  </a>';
						echo '  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">';
						echo '	<i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true"></i>';
						echo '	<span class="sr-only">Next</span>';
						echo '  </a>';
						echo '</div>';
					?>
				</div>
				</div>
				<div class="row">
					<?php
					
					$query = " 
						SELECT p.id as id, p.title as title, p.description as description, p.price as price, p.brand as brand, p.rating as rating
						FROM product p
						WHERE p.id = ".$productid."
						LIMIT 1;";
						
					$results = $db->query($query);
					$obj = $results->fetch_object();
					echo '<div class="container jumbotron bg-inverse">';
					echo '	<div class="col-sm-8">';
					echo '		<h3 class="text-danger">Decription</h3>';
					echo '		<p class="card-text">'.$obj->description.'</p>';
					echo '		<p class="card-text">Brand: '.$obj->brand.'</p>';
					echo '		<br/>';
					echo '		Rating: ';
					for ($x = 0; $x < $obj->rating; $x++) {
						echo '		<i class="fa fa-star" aria-hidden="true" style="color:#f0ad4e"></i>';
					} 
					echo '	</div>';
					echo '	<div class="col-sm-4">';
					echo '		<h3 class="text-danger">Price</h3>';
					echo '		<h3 class="card-title">$'.$obj->price.'</h3>';
					echo '		<a href="cart_update.php?type=add&productid='.$obj->id.'&return_url='.$current_url.'" class="btn btn-lg btn-block btn-warning">Buy</a>';
					echo '	</div>';
					
					$query = " 
					Select u.firstname as firstname, u.lastname as lastname, u.city as city, u.state as state
					From users u inner join product p ON p.userposted = u.id
					WHERE p.id = ".$productid." LIMIT 1;";
					
					$results = $db->query($query);
					$obj = $results->fetch_object();
					
					echo '	<div class="col-sm-8">';
					echo '		<h3 class="text-danger">User Posted</h3>';
					echo '		<p class="card-text">'.$obj->firstname.' '.$obj->lastname.' <a class="disabled" data-toggle="tooltip" title="Contact User Coming Soon!!"><i class="fa fa-envelope" aria-hidden="true"></i> <i class="fa fa-phone-square" aria-hidden="true"></i></a></p>';
					echo '	</div>';
					echo '	<div class="col-sm-4">';
					echo '		<h3 class="text-danger">Location</h3>';
					echo '		<p class="card-text">'.$obj->city.', '.$obj->state.'</p>';
					echo '	</div>';
					
					echo '</div>';
					?>
				</div>
				<h3>Reviews</h3>
				<div class="row jumbotron bg-inverse">
				<?php
					$query = " 
					SELECT r.rating as rating, r.review as review , u.firstname as username, ui.imagepath as imagepath
					FROM reviews r 
					Inner Join users u ON r.userid=u.id
					Inner Join user_images ui ON u.id=ui.userid
					WHERE r.productid = ".$productid.";";
					
					$resultSet = $db->query($query, MYSQLI_STORE_RESULT);
					echo '<a class="btn btn-warning pull-right disabled"  data-toggle="tooltip" title="Add Review Coming Soon!!"><i class="fa fa-plus-square fa-2x" aria-hidden="true"></i></a>';
					while ($row = $resultSet->fetch_assoc())
					{
							echo '<div class="col-sm-12">';
							echo '	<div class="col-md-3 text-xs-center text-justify">';
							echo '<br/><br/>';
							for ($x = 0; $x < $row['rating']; $x++) {
							echo '		<i class="fa fa-star text-warning" aria-hidden="true"></i>';
							} 
							echo '	</div>';
							echo '	<div class="col-md-3 text-xs-center">';
							echo '		<img src="'.$row['imagepath'].'" class="img-circle"width="100px" height="100px" />';
							echo '		<h5>'.$row['username'].'</h5>';
							echo '	</div>';
							echo '	<div class="col-md-3">';
							echo '		  <p class="card-text">'.$row['review'].'</p>';
							echo '	</div>';
							echo '</div>';
					}
				?>	
				</div>
			</div>
		</div>
	</div>
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
    <script src="../js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
	<script src="../js/jquery-ui.js"></script>
	<script>
		$(document).ready(function(e){
			$("#searchcategory").keyup(function (e) {
				var x = $(this).val();
				$.ajax({
					type:'GET',
					url:'../search/search.categories.php',
					data: 'searchtext='+x,
					success: function(response){
						var json_obj = $.parseJSON(response);//parse JSON
						var retrieved_data = new Array();
						for (var i in json_obj) 
						{
							retrieved_data.push(json_obj[i].name);
						}
						
						$("#searchcategory").autocomplete({
							source: retrieved_data
						});
					}
				});
			});
		});
		
		$(document).ready(function(e){
			$("#searchproduct").keyup(function (e) {
					var x = $(this).val();
					$.ajax({
						type:'GET',
						url:'../search/search.producttype.php',
						data: 'searchtext='+x,
						success: function(response){
							var json_obj = $.parseJSON(response);//parse JSON
							var retrieved_data = new Array();
							for (var i in json_obj) 
							{
								retrieved_data.push(json_obj[i].type);
							}
							$("#searchproduct").autocomplete({
								source: retrieved_data
							});
						}
					});
				});
			});
	</script>
	<?php
	if (isset($_REQUEST['opencart']))
	{
		$opencart = $_GET["opencart"];
		if($opencart)
		{
			echo '<script type="text/javascript">';
			echo '	$(window).load(function(){';
			echo '		$("#myModal").modal("show");';
			echo '	});';
			echo '</script>';
		}
	}
	?>
  </body>
</html>
